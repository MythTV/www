<?php
    $topic  = 'announcement';
    $title  = 'MythTV 0.10 Released';
    $author = 'isaac';
    $date   = strtotime('2003-07-01 21:41:20 UTC');
?>
<ul>
  <li>So, um, new release.  Get it while it's hot:
  <ul>
    <li>New internal architecture that makes all the add-on modules a plugin running in the main mythfrontend window instead of as separate applications.
    <li>It's very easy to run completely without the TV functionality, now.
    <li>No more text config files, except for the 4 line one that tells it where the mysql server is.  Everything is configured through the UI.
    <li>Spiffy new rankings system that provides an alternative form of recording conflict resolution, written by Jason Rosson.
    <li>Preliminary native ALSA support.
    <li>A bunch of MythGallery updates by Dennis Lou -- zooming of images, semi-automatic image importing, thumbnail caching, along with some other things.
    <li>Lots of translation updates, including a new Danish translation by Martin Moeller.
    <li>Lot of bugfixes and other minor features that I'm too lazy to go through the CVS commit logs and pull out a summary of.
  </ul>
  <li>You'll also want to upgrade to XMLTV 0.5.14 (released earlier today) to get the North American grabber working again.
  <li>As always, grab things from the <a href="http://www.mythtv.org/modules.php?name=Downloads">download section</a> and read the <a href="http://www.mythtv.org/modules.php?name=MythInstall">documentation</a>.  Make sure to read the various UPGRADING files if you're upgrading from an earlier release.
  <li>Precompiled packages for Debian will be available shortly from the <a href="http://dijkstra.csh.rit.edu:8088/~mdz/debian/dists/woody/mythtv/">usual place</a>.
</ul>
