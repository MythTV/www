<?php
    $topic  = 'announcement';
    $title  = 'New MythTV 0.12 Release';
    $author = 'isaac';
    $date   = strtotime('2003-10-18 23:03:23 UTC');
?>
<ul>
  <li>Time for a new release.  Not too many big sweeping changes this time around, but here's the major changes:
  <ul>
    <li>Support for the PVR-350 MPEG decoder / TV out, the MPEG decoder on the VIA EPIA-M motherboards, and XvMC acceleration on some video cards.  All of these work pretty well, the only major thing not really working is the built in edit mode.
    <li>Geoffrey Hausheer fixed up the recording profiles settings so they better support mixed sets of capture cards (ie, having a PVR-250 and an analog card).
    <li>The built-in transcoder works much better now, also thanks to Geoffrey Hausheer.
    <li>Doug Larrick's done a bunch of work getting the pcHDTV card working better and Kenneth Aafloy's done some work on DVB support, though the majority of DVB changes are going to go in after this release.
    <li>The LCD character display support was greatly improved by Dan Morphis.
    <li>David Engel contributed a bunch of code that, among other things, enables a smooth fast forward / slow-motion playback mode.
    <li>Tako Schotanus did a bunch of work to make the frontend more tolerant to the backend disappearing on it.
    <li>Lots of translations updates by quite a few people.  We've got Catalan, German, Danish, Spanish, French, Italian, Dutch, Portuguese, and Swedish translations in various states of completion (there's a lot of text to translate, especially when you consider all the settings options).  Additional languages/fixes are much appreciated.
    <li>Thor enhanced MythVideo so you can configure file type associations and various metadata (covers, etc) through the UI now.
    <li>Chris Petersen's steadily improving MythWeb.
    <li>Stefan Frank added support in MythMusic to compress to MP3, instead of Vorbis or FLAC.
    <li>Renchi Raju contributed a RSS news feed reader plugin -- mythnews.
  </ul>
  <li>Grab the release from the  <a href="/download">download section</a> and please at least try to read the <a href="/docs">docs</a>. 
  <li>The binary packages should hopefully be updated soon (aside from the Debian ones, as the maintainer is unavailable for a little while).
  <li>And last but not least, I've added a <a href="http://www.mythtv.org/modules.php?name=Web_Links&l_op=viewlink&cid=3">section</a> to the Web Links page for distributions based around MythTV.
</ul>
