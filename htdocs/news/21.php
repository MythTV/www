<?php
    $title  = 'July 24, 2002';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2002-07-24 21:17:17 UTC');
?>
<ul>
  <li>Started working on the music interface.  So far, I've got it going through a directory, looking for music files (ogg and mp3), pulling out all the metadata from the files, dumping it into the database, and <a href="mc/firstmusic.png"> building a GUI</a> out of that information.  I think that that interface might work pretty well as a way to select your playlist using only a remote.  Walk around in the tree with the arrow keys on your remote, select any item (artist, album, track, or genre) and it'll add everything under that selection to the playlist.  I'll commit things to CVS when it's more complete..  Oh, and I think I'm going to make the music portion a separate download, so as not to contaminate the "main" TV stuff with the extra dependencies that this'll add.
</ul>
