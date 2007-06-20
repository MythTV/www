<?php
    $title  = 'Working on stuff...';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2003-09-03 17:39:41 UTC');
?>
<ul>
  <li>So, in the past week and a half, I've added preliminary support for the CLE266 MPEG-2 decoder that's present on the EPIA-M motherboards.  I'm having some strange video corruption issues with it, though, that are also present in VIA's hacked up version of Xine -- essentially, it looks like it's not flipping screens at the right time, and there's some funky diagonal image tearing going on.  I've also got the OSD working on the CLE266 and XvMC hardware decoders, though both look pretty bad right now due to the fact that they're limited to 16 colors and I'm not doing any dithering whatsoever.  Next step is the PVR-350 decoder, hopefully.
  <li>Not much else going on.  Thor recently added a bunch of features to MythVideo, Geoffrey Hausheer's got the built-in transcoder working properly for mpeg-2 source files, etc, etc..
</ul>
