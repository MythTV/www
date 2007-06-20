<?php
    $title  = 'July 26, 2002';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2002-07-26 21:18:21 UTC');
?>
<ul>
  <li>More progress on the music player.  Biggest change is the ability to play music.  Kinda necessary, no?  I ended up ripping the mp3/ogg decoder code out of MQ3, since I couldn't find a suitable library that handled both mp3 and ogg files..  Interesting little GPL violation there, btw (MQ3's format decoding sections make extensive use of GPLd code, but is distributed under a much more permissive 'license').  Anyway.  The music selection dialog is now fully active, letting you select songs to play.  I've also got the beginnings of a playback dialog, though it doesn't really do much more than show you the playlist and display the current trackname and time into the track.  Not good enough for a screenshot, too bad.  Oh, and it can now play CDs, too, though there really won't be much use for that once I get the auto-rip code written.
  <li>Forgot to mention..  the nifty logo at the top of the page was contributed by <a href="http://dash-dash.org/">mazeone</a>.  Thanks!
</ul>
