#!/usr/bin/perl -w
#
# Publish www.mythtv.org code to /opt/www
#
# @url       $URL$
# @date      $Date$
# @version   $Revision$
# @author    $Author$
# @copyright   MythTV
#
# @package     mythtv.org
#

# Target directory
    my $target = '/opt/www/www.mythtv.org';

# Current db schema version
    my $cur_schema = 1;

###############################################################################

# Autoflush buffers
    $|++;

# Add a couple of include paths so we can load the various export and gui modules
    use English;
    use File::Basename;
    use File::Path;
    use File::Copy;
    use Cwd 'abs_path';
    use DBI;

# Where are the files located?
    my $src = dirname(abs_path($0 or $PROGRAM_NAME));

# Cleanup, and build shell-safe versions
    $src    =~ s#/*$#/#;
    $target =~ s#/*$#/#;
    my $safe_src    = shell_escape($src);
    my $safe_target = shell_escape($target);

# Make sure that we can understand the apache db config parameters
    my ($db_file);
    open DATA, 'mythtv.conf.apache'
        or die "Can't read mythtv.conf.apache:  $!\n";
    while (<DATA>) {
        next unless (/setenv\s+db_file\s+"([^"]+)/);
        $db_file = $1;
        last;
    }
    close DATA;
    die "Can't find db credentials\n" unless ($db_file);

# Connect to the database
    my $dbh = DBI->connect("dbi:SQLite:dbname=$db_file",'','');
    die "Couldn't open/create $db_file SQLite database:  $DBI::errstr\n" if ($DBI::errstr || !$dbh);

# Get the current db_vers from the database, but only query if we know the
# settings table exists.
    my $db_schema = 0;
    if ($cur_schema > 1) {
        ($db_schema) = $dbh->selectrow_array('SELECT data
                                               	FROM settings
                                               WHERE value="db_schema"');
        $db_schema ||= 0;
    }

# Eventually, do this for git.  For now, it's not actually used in the code anyway.
#
# Get the current svn revision
#    my $svn_info = `svn info $safe_src 2>/dev/null`;
#    my ($svn_rev) = $svn_info =~ /^Revision:\s*(\d+)/m;
#    if ($svn_rev) {
#        print "Publishing SVN revision $svn_rev\n";
#    }
#    else {
#        die "Can't determine SVN revision for $src\n";
#    }

# Cleanup, since trailing slashes change rsync behavior
    $target =~ s/\/+$//s;

# And make sure this one HAS a trailing slash, for rsync
    $src =~ s#/*$#/#s;

# Make sure the target path exists
    unless (-d $target) {
        mkpath($target)
            or die "Can't create $target\n";
    }

# Take down the site, in case there is an error (in case rsync doesn't copy this
# file over fast enough).
    print "Disabling website for updates\n";
    open DATA, ">$target/site_is_disabled"
        or die "Can't create $target/htdocs/site_is_disabled: $!\n";
    print DATA time();
    close DATA;

# Copy
    my $cmd = 'rsync -alvHS --exclude=.git --cvs-exclude --delete'
           # Files we don't want to copy
           .' --exclude publish.pl'
           .' --exclude mythtv.conf.apache'
           .' --exclude newpost.pl'
           # Files we don't want the rsync to blow away
           .' --exclude logs'
           .' --exclude myth_svndocs'
           .' --exclude site_is_disabled'
           # src/dest
           .' '.$safe_src
           .' '.$safe_target;
    print "$cmd\n";
    system($cmd);

# Make sure the apache config gets updated, too
    copy('mythtv.conf.apache', '/etc/httpd/conf.d/mythtv.conf')
        or die "Can't install mythtv.conf.apache:  $!\n";

# Fix CSS links, etc. for better image cache behavior in browsers
    #system("sed -i -e 's,/img,/$svn_rev/img,g' $safe_target/htdocs/css/*css");
    #system("sed -i -e \"s/define('svn_rev', \+time());/define('svn_rev', '$svn_rev');/g\" $safe_target/htdocs/mythtv.php");

# Make sure the files are all owned properly
    system('chown -R apache\:apache '.shell_escape($target));

# Does the db schema need to be updated?
    if ($db_schema < $cur_schema) {
        print "Updating DB Schema\n";
    # No version, no database
        if ($db_schema == 0) {
            $dbh->do('DROP TABLE IF EXISTS settings');
            $dbh->do('CREATE TABLE settings (
                        value TEXT,
                        data  TEXT
                      )');
            $dbh->do('DROP TABLE IF EXISTS downloads');
            $dbh->do('CREATE TABLE downloads (
                        date int,
                        version text,
                        module text,
                        count int
                      )');
            $dbh->do('CREATE INDEX date_idx ON downloads (date, module, version)');
        # Update the schema
            update_schema(++$db_schema);
        }
    }

# Re-enable the website
    unlink "$target/site_is_disabled"
        or die "Can't unlink $target/site_is_disabled:  $!\n";
    print "Website has been re-enabled.\n";

# Done
    exit;

###############################################################################

# Escape a parameter for safe use in a commandline call
    sub shell_escape {
        $str = shift;
        $str =~ s/'/'\\''/sg;
        return "'$str'";
    }

# Update the db schema version
    sub update_schema {
        my $vers = shift;
        $dbh->do('REPLACE INTO settings
                               (value, data)
                       	VALUES ("db_schema", ?)',
                 undef,
                 $vers);
    }

