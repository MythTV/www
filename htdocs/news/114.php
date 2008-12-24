<?php
    $topic  = 'announcement';
    $title  = '0.18.1';
    $author = 'isaac';
    $date   = strtotime('2005-05-16 01:48:10 UTC');
?>
<ul>
  <li>Howdy.  Trying something a bit different, here.  Jarod Wilson (the <a href="http://wilsonet.com/mythtv/">Fedora Myth How-to guy</a>) has been maintaining a branch of 0.18 and accumlating some of the bugfixes/minor feature additions back from the main branch of Myth.  So, he's put this release together (many thanks!), and I'm only writing this announcement for it.  If it's busted, blame him, not me. =)  
  <li>Here's what's new:
  <li>Bug fixes:
  <ul>
    <li>Correction of typos in html status page.
    <li>Configure additions to properly build mythbrowser.
    <li>Fix for time stretch bugs -- OSD now displays correct values.
    <li>Fix to correct non-visible channels being visible in browse mode.
    <li>FireWire mpeg2ts sync bugfix.
    <li>Datadirect failures are handled without deleting guide data.
    <li>Assorted UI element drawing order improvements.
    <li>EPG Jump to Channel fixes.
    <li>Scrolling text and popup menu wrap-around fixes in OSD.
    <li>Fix for live TV audio loss when viewing mpeg2 transport streams.
    <li>Fix for proper mpeg2 transport stream handling when using UniChrome XvMC.
  </ul>
  <li>New features:
  <ul>
    <li>Support for the <a href="http://www.lxmsuite.com/">LxM Suite</a> services.  Basically, this is a subscription-based data-services/extras setup, with some of the money coming back towards the project in the form of development bounties.  More info on the site, but, seems fairly neat to me.  The initial theme that they're working on looks rather nice, too.  (It's nowhere near as dark running on a TV as it appears on a monitor).  I'm personally not involved with this terribly much, but one of the other major developers (Donavan Stanley) has been working really closely with them setting this up.
    <li>Internal channel-change over firewire support for DCT-6200 series cable boxes - no external program required like before.
  </ul>
  <li>Anyway, should be slightly better than 0.18.  Nothing terribly big fixed, but, worth the upgrade I'd say.  There's only updated source packages for mythtv and mythplugins - no myththemes update, before anyone asks.
  <li>Standard release info:
  <ul>
    <li>Grab the release from the  <a href="http://www.mythtv.org/modules.php?name=Downloads">download section</a> and please at least try to read the <a href="http://www.mythtv.org/modules.php?name=MythInstall">docs</a> before asking questions. 
    <li>The <a href="http://www.mythtv.org/modules.php?name=Web_Links&l_op=viewlink&cid=1">binary packages</a> should hopefully be updated to 0.18.1 soon.
    <li>See this <a href="http://www.mythtv.org/modules.php?name=Web_Links&l_op=viewlink&cid=3">links section</a> for a list of complete linux distributions based around MythTV.
  </ul>
</ul>
