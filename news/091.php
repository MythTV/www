<?php
    $topic  = 'news';
    $title  = 'Seems like a decent release.';
    $author = 'isaac';
    $date   = strtotime('2003-08-23 10:15:02 UTC');
?>
<ul>
  <li>Seems like 0.11 was a pretty decent release.  No major bugs reported until now, though I'm sure I'm jinxing things by pointing that out.  Ah well =)
  <li>New stuff in MythTV CVS:
  <ul>
    <li>Thor recently added back the ability to setup arbitrary handler commands for file types to MythVideo, like in the original MythVideo version before it got the UI rewrite.  This time, though, all configuration is done through the UI settings menu, not text files.
    <li>Stefan Frank has submitted a patch to allow MythMusic to do MP3 encoding, in addition to the existing Vorbis and FLAC support.
    <li>Dan Morphis submitted a large set of changes that significantly enhance the LCD panel support, allowing better navigation of menus and control of MythMusic than before.
    <li>David Engel's submitted code that, among other things, adds a smooth fastforward/slow motion playback mode.
  </ul>
  <li>Dennis Cartier has made a little mini-distribution for running a MythFrontend (and shortly all the other plugin modules) on an Xbox.  Get it (and installation instructions) <a href="http://bit.blkbk.com">here</a>.
  <li>All of the various pre-compiled versions of MythTV (Debian, Redhat, Mandrake, and the Gentoo ebuilds) have been updated to 0.11 since the release.  Thanks to the various maintainers for being so timely in their updates =)
  <li>As for what's going to happen in the (hopefully) near future, I'm looking into rewriting the Video OSD code a little bit in order to support the PVR-350 decoder -- the IVTV driver guys are close to getting that all working nicely.
</ul>
