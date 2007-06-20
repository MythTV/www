<?php
    $title  = 'Lucky 0.13';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2003-12-10 22:24:22 UTC');
?>
<ul>
  <li>Oh, well, I suppose I should update the website once in a while.  Here's a new release to make up for it.
  <li>Major changes:
  <ul>
    <li>Qt 3.1 is now the minimum required for MythTV.  It was getting to be a pain to keep compatability code for Qt 3.0 around.
    <li>All of the plugins' database handling got moved into the source, so everything is automatic now.
    <li>David Engel and Chris Pinkham did a bunch of work on the program recording scheduler, adding support for a very flexible override system, per-show pre/post recording times (in addition to the current global ones), etc.
    <li>I added support for user-configurable keybindings -- use the settings page in MythWeb to change things around however you want now.  There's a couple caveats listed on the top of the settings page that you should pay attention to, though.
    <li>Oscar Carlsson prettied up the backend status port (point a browser at http://ip.of.master.backend:6544/ if you've not done that before).  Robert Kulagowski (in addition to his work on the docs) did a similar status page for the frontend.
    <li>Holger Buchfink contributed many bugfixes, including a much needed rework of the frontend networking internals.
    <li>Chris Petersen's continued to improve MythWeb.
    <li>Christian Hoenig's automatic shutdown / wakeup patch finally got merged into CVS.
    <li>Doug Larrick and Jason Hoos have been working on improving the pcHDTV support, and Kenneth Aafloy has been working on DVB support.
    <li>Ken Bass contributed a framework to allow external programs to display information on the OSD during video playback -- ie, useful for a Caller-ID system.  I modified it slightly to add a scrolling ticker type.  See the 'mythtvosd' and 'contrib/mythnotify' directories in the main distribution for more information.
    <li>Philippe Cattin contributed a new modules -- MythBrowser.  Basically, it's a small customized version of Konqueror meant to run on a TV.  Works pretty well. =)
  </ul>
  <li>Apologies if I forgot to mention anyone's contributions.
  <li>I will try to get the new and updated themes for 0.13 on the website in the next few days. 
  <li>Grab the release from the  <a href="http://www.mythtv.org/modules.php?name=Downloads">download section</a> and please at least try to read the <a href="http://www.mythtv.org/modules.php?name=MythInstall">docs</a>. 
  <li>The binary packages should hopefully be updated soon .
  <li>See this <a href="http://www.mythtv.org/modules.php?name=Web_Links&l_op=viewlink&cid=3">links section</a> for a list of complete linux distributions based around MythTV.
</ul>
