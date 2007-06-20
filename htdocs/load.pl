#!/usr/bin/perl -w
#


# Connect
    use DBI;
    $dbh = DBI->connect("dbi:mysql:database=mythtv_org:host=localhost",
                        'mythtv123',
                        'mythtv123')
        or die "Cannot connect to database: $!\n\n";

# Extract
    my $sh = $dbh->prepare('SELECT sid, title, time, hometext FROM nuke_stories');
    $sh->execute();


# Build the list
    while (my $row = $sh->fetchrow_hashref) {
        print "$row->{sid}\n";
        open(DATA, ">news/$row->{sid}.php") or die "can't write news/$row->{sid}.php:  $!\n";
        print DATA <<EOF;
<?php
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
