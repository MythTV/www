<?php
    $topic  = 'news';
    $title  = 'November 25, 2002';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2002-11-25 22:41:41 UTC');
?>
<ul>
  <li>If you're having problems with xmltv failing to get program data, use the 0.5.3 release.
  <li>Finished off the initial support for hardware mjpeg compressor cards today..  Stuff's been in CVS for awhile, but there wasn't a way to configure things like quality and capture size until now.  Anyway, I've just tested things with a Matrox G200-TV, but it should work on anything that the <a href="http://mjpeg.sf.net">MJPEG tools</a> supports.
  <li>I forgot to mention a rather large optimization that went into CVS recently -- Matt Zimmerman (same guy that's doing the Debian packages) contributed the beginnings of a patch to use libavcodec's direct rendering support, and I finished it off..  So, playback of mpeg4 encoded files uses considerably less CPU now =)  Other codecs (ie, rtjpeg) see a little improvement as well.  Very cool stuff.
</ul>
