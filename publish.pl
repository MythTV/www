#!/usr/bin/perl -w
#
# Publish percdata.com code to /var/www/sites
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
    my $target = '/data/www/www.mythtv.org';

###############################################################################

# Autoflush buffers
    $|++;

# Add a couple of include paths so we can load the various export and gui modules
    use English;
    use DBI;
    use File::Basename;
    use File::Path;
    use File::Copy;
    use Cwd 'abs_path';

# Where are the files located?
    my $src = dirname(abs_path($0 or $PROGRAM_NAME));
    my $safe_src    = shell_escape($src);
    my $safe_target = shell_escape($target);

# Get the current svn revision
    my $svn_info = `svn info $safe_src 2>/dev/null`;
    my ($svn_rev) = $svn_info =~ /^Revision:\s*(\d+)/m;
    if ($svn_rev) {
        print "Publishing SVN revision $svn_rev\n";
    }
    else {
        die "Can't determine SVN revision for $src\n";
    }

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
    system('rsync -ualvHS --cvs-exclude --delete'
           # Files we don't want to copy
           .' --exclude publish.pl'
           .' --exclude mythtv.conf.apache'
           # Files we don't want the rsync to blow away
           .' --exclude myth_svndocs'
           .' --exclude site_is_disabled'
           # src/dest
           .' '.$safe_src
           .' '.$safe_target);

# Make sure the apache config gets updated, too
    copy('mythtv.conf.apache', '/etc/apache2/sites-available/mythtv')
        or die "Can't install mythtv.conf.apache\n";

# Fix CSS links, etc. for better image cache behavior in browsers
    system("sed -i -e 's,/img,/$svn_rev/img,g' $safe_target/htdocs/css/*css");
    system("sed -i -e \"s/define('svn_rev', \+time());/define('svn_rev', '$svn_rev');/g\" $safe_target/htdocs/mythtv.php");

# Make sure the files are all owned properly
    system('chown -R www-data\:www '.shell_escape($target));

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

