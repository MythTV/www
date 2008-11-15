#!/usr/bin/perl -w
#

# Topics (lifted from the nuke_topics table)
    my %topics = (
       2 => 'news',          # mythnews
       3 => 'news',          # hardware
       4 => 'announcement',  # announce
       5 => 'bug',           # bugs
       6 => 'news',          # codehacks
       7 => 'news',          # ideas
       8 => 'news',          # links
       9 => 'news',          # questions
      10 => 'software_news', # software
      11 => 'theme_news',    # themes
    );

# Connect
    use DBI;
    $dbh = DBI->connect("dbi:mysql:database=mythtv_org:host=localhost",
                        'mythtv123',
                        'mythtv123')
        or die "Cannot connect to database: $!\n\n";

# Extract
    my $sh = $dbh->prepare('SELECT sid, topic, title, time, hometext FROM nuke_stories');
    $sh->execute();

# Build the list
    while (my $row = $sh->fetchrow_hashref) {
        print "$row->{sid}\n";
	$row->{title} =~ s/'/\\'/sg;
        open(DATA, ">news/$row->{sid}.php") or die "can't write news/$row->{sid}.php:  $!\n";
        print DATA <<EOF;
<?php
    \$topic  = '$topics{$row->{topic}}';
    \$title  = '$row->{title}';
    \$author = '<a href="http://www.mythtv.org/">Isaac</a>';
    \$date   = strtotime('$row->{time} UTC');
?>
$row->{hometext}
EOF
    }

# Cleanup
    $sh->finish;
    $dbh->disconnect;
