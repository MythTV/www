#!/usr/bin/perl -w

# Autoflush buffers
    $|++;

# Add a couple of include paths so we can load the various export and gui modules
    use English;
    use File::Basename;
    use File::Path;
    use Date::Format;
    use Cwd 'abs_path';
    use Data::Dumper;

# Where are the files located?
    my $path = dirname(abs_path($0 or $PROGRAM_NAME));
    my $safe_path = shell_escape($path);
    my $conf_path = dirname($path).'/includes/conf.php';

# File slurp mode
    $/ = undef;

# Read in the config file
    $conf_data = '';
    open(CONF, $conf_path) or die "Can't read $conf_path:  $!\n";
    while (<CONF>) {
        $conf_data .= $_;
    }
    close $conf_data;

# Disable file slurp mode
    $/ = "\n";

# Parse the config data into something we can load into perl
    $conf_data =~ /\$Authors\s*=\s*array\(\s*(.+?)\s*\);\s*\n/s;
    my %authors = eval("($1)");
    $conf_data =~ /\$Topics\s*=\s*array\(\s*(.+?)\s*\);\s*\n/s;
    my %topics = eval("($1)");

# Which userid should we be using for the author?
    my $author;
    my $svn_info = `svn info $safe_path`;
    if ($svn_info =~ m#URL: svn+ssh://(\w+)\@#) {
        $author = $1;
    }
    else {
        $author = $ENV{USER};
    }
    unless ($authors{$author}) {
        print "Unrecognized author userid:  $author\n",
              "Please see includes/conf.php for valid post authors.\n";
        exit;
    }

# Get the time in the format we like
    my @lt = localtime(time);
    my $time = strftime('%Y-%m-%d %k-%M-%S UTC', @lt, 'UTC');

# Load the next post number
    my $file = 0;
    opendir(DIR, $path) or die "Can't read $path:  $!\n";
    foreach my $f (readdir(DIR)) {
        next unless ($f =~ /^(\d+)\.php$/);
        $file = $1 if ($file < $1);
    }
    $file = ($file+1).'.php';

# Ask about the topics
    my $topic;
    my @answers = sort {$topics{$a} cmp $topics{$b}} keys %topics;
    until ($topic) {
        print "Which topic should this post be filed under?\n";
        my $i;
        foreach my $t (@answers) {
            $i++;
            print "  $i. $topics{$t}\n";
        }
    # Process the choice
        print 'Choice:  ';
        my $c = <STDIN>;
        chomp $c;
        $c -= 1;
        unless ($answers[$c]) {
            print "Not a valid choice.\n";
            next;
        }
    # Set the requested topic, and move on
        $topic = $topics{$answers[$c]};
        last;
    }

# Print the data
    print "Creating new post: $path/$file\n";
    open(DATA, ">$path/$file") or die "Can't create $path/$file:  $!\n";
    print DATA <<EOF;
<?php
    \$topic  = 'announcement';
    \$title  = 'POST TITLE HERE';
    \$author = '$author';
    \$date   = strtotime('$time');
?>

EOF
    close DATA;
    print "  Author:  $author\n",
          "  Time:    $time\n";

# Ask to edit
    my $editor = $ENV{'EDITOR'};
    $editor ||= 'vim';
    print "\nEdit $file in $editor?  [n] ";
    my $edit = <STDIN>;
    if ($edit =~ /^[y1t]/i) {
        system("$editor $path/$file");
    }
    print "\n";

# Done
    print "New news post created:  $path/$file\n\n";
    exit;

###############################################################################

# Escape a parameter for safe use in a commandline call
    sub shell_escape {
        $str = shift;
        $str =~ s/'/'\\''/sg;
        return "'$str'";
    }

