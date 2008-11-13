<?php
    $topic  = 'news';
    $title  = 'July 29, 2002';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2002-07-29 21:20:13 UTC');
?>
<ul>
  <li>Got Vorbis encoding working, and it's all integrated nicely into the ripper now.  FLAC encoding will come tomorrow, probably.  So MythMusic can now rip CDs, automatically insert the metadata into the database, and let you play them using the music library tree to select things with.  Pretty much feature complete, minus some minor things like configuration and a couple status popups.  Well, and editing metadata from the tree, dealing better with multiple artist albums, and other stuff, too, but...
  <li><a href="mc/ripper.png">Screenshot of the CD Ripping UI.</a>  There's a progress dialog that shows up after you select 'Import this CD', too.  Editing the tracknames'll be kind of hard without a keyboard, so I support I'll have to eventually make a pop-up keyboard thing.
  <li>Got cd ripping working last night.  No compression yet, that should come shortly.
</ul>
