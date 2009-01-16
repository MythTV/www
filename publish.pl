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
    my $target = '/data/www/new.mythtv.org';

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
           .' '.shell_escape($src)
           .' '.shell_escape($target));

# Make sure the apache config gets updated, too
    copy('mythtv.conf.apache', '/etc/apache2/sites-available/newmythtv')
        or die "Can't install mythtv.conf.apache\n";

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

