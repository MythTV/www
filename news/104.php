<?php
    $topic  = 'announcement';
    $title  = 'Small bugfix update';
    $author = 'isaac';
    $date   = strtotime('2004-05-31 23:36:02 UTC');
?>
<ul>
  <li>Well, there were a few minor bugs in the 0.15 release, so I decided to put out a point release to fix them.  What's changed/fixed in 0.15.1:
  <ul>
    <li>The scheduler was broken with respect to priorities if the user had never set the priority on a tuner card input.
    <li>The playback window could get stuck in a state where it was continually re-drawing the recording preview pixmap.
    <li>Some compilation fixes and translation updates.
    <li>MythMusic, MythVideo, and MythWeb are also updated with minor bug fixes.
  </ul>
  <li>So, nothing terribly major, but I'd recommend upgrading when you've got some extra time.
  <li>I've also got 2 new themes to add, and will hopefully have time to do that tomorrow night.  Don't quote me on that, though.
  <li>Oh, and since some people seem to be a bit slow on the uptake:  tv_grab_na (The North American listings grabber from XMLTV) is broken.  It won't be fixed.  To get program listings, you either need to use 0.15 with the internal Zap2It DataDirect grabber, or go through some convolutions to get tv_grab_na_dd working with 0.14.
</ul>
