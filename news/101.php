<?php
    $topic  = 'announcement';
    $title  = 'The 0.14 Release';
    $author = 'isaac';
    $date   = strtotime('2004-01-31 16:32:42 UTC');
?>
<ul>
  <li>Did I say something about releasing more often?  Oh well.  
  <li>Lots of new stuff in this release, though no major sweeping changes.  Here's a random list of the bigger changes, see the <a href="http://www.mythtv.org/pipermail/mythtv-commits/">mythtv-commits mailing list archive</a> if you're really curious about what's been going on.
  <ul>
    <li>Oscar Carlsson's 'G.A.N.T.' theme is now distributed as part of the base mythtv tarball.  I rather like it, and it may become the default theme at some point in the future.  Note that the theme name is different from the earlier version that was on the website previously, so if you're using it, you'll have to go into the settings and switch.
    <li>Bruce Markey and David Engel did a Program Search dialog to allow searching for programs in a variety of ways.
    <li>Renchi Raju rewrote the MythNews and MythGallery plugins -- check out the features section of this website for some updated images.
    <li>Thanks to a lot of people, we're now up to 10 translations.  All are works in progress, but the list is now: Catalan, Spanish, German, Danish, French, Italian, Dutch, Swedish, Portuguese, and Japanese.  More translations and updates to existing ones are always welcome.
    <li>A directfb video output method was contributed by Wayne Hogue and Steve (?).  Along with support for Qt/Embedded, this allows mythtv to be built without any dependency on X.  Don't compile in support for directfb unless you're going to be using it -- it disables the normal Xv output method.
    <li>Ian Caulfield started work on a Windows port of the frontend (ie, no recording), that uses cygwin and the Qt3/Win32 port.
    <li>David Engel did a bunch of work improving the PVR-350 decoder / tv-out support.  I did a little bit to enable Picture-in-Picture mode while using the PVR-350 for output.
    <li>As usual, Doug Larrick has been working on improving the pcHDTV support, and Kenneth Aafloy has been working on DVB support, including a spiffy new GUI channel editor for setup.  Please note, people using tv_grab_na (US/Canada) don't need to use the channel editor during initial setup, but it should be a pretty useful alternative for people whose xmltv grabbers (and people using DVB, of course) don't include channel information.
    <li>Some fairly major internal reorganization to build more things as shared libraries instead of static.  This leads to a much smaller total installation size.
    <li>Tons of tweaks and other random stuff.
  </ul>
   <li>Apologies if I forgot to mention anyone's contributions, but this is just a quick list of browsing through the commits list archives.
  <li>Grab the release from the  <a href="/download">download section</a> and please at least try to read the <a href="/docs">docs</a>. 
  <li>The <a href="http://www.mythtv.org/wiki/index.php/Packages">binary packages</a> should hopefully be updated to 0.14 soon.
  <li>See this <a href="/download#other-downloads">links section</a> for a list of complete linux distributions based around MythTV.
</ul>
