<?php
    $title  = 'MythTV 0.9 is now available.';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2003-06-09 19:33:54 UTC');
?>
<ul>
  <li>New release.  Fun stuff.  Here's what's changed:
  <ul>
    <li>UI makeover, mainly by John Danner.  Just look at the screenshots page for details on this.
    <li>Better automatic commercial detection/skipping by Chris Pinkham.
    <li>Support for closed captioning by Lonnie Hutchinson.
    <li>More flexible TV OSD design.
    <li>Support for the hardware mpeg encoder cards supported by the ivtv driver (mainly, the Hauppauge WinTV PVR-250 and -350).  Please note that the ivtv driver has not been officially released yet, and is still sort of buggy -- it randomly stops capturing, and can lock your system up.  Please direct bug reports to the ivtv-devel list instead of the mythtv lists.  Also, please note that the hardware decoder on the PVR-350 is not supported by the ivtv driver yet.
    <li>Very preliminary DVB support by Ben Bucksch, needs finishing.
    <li>Translations for Italian, Spanish, Catalan, Dutch, French, and German.
    <li>Playlists, a new playback UI, and much speedier execution in MythMusic by Thor Sigvaldason.
    <li>Completely rewritten MythVideo module by John and Thor.
    <li>Many more changes that I'm forgetting about.
    <li>Random bug fixes, random new bugs, as usual.
  </ul>
  <li>As always, grab things from the <a href="http://www.mythtv.org/modules.php?name=Downloads">download section</a> and read the <a href="http://www.mythtv.org/modules.php?name=MythInstall">documentation</a>.  Make sure to read the various UPGRADING files if you're upgrading from an earlier release.
  <li>Be sure to check out the Add-ons section of the downloads.  I've noticed a large number of people never grab things like MythMusic, MythWeather, or MythVideo.
  <li>Precompiled packages for Debian will be available shortly from the <a href="http://dijkstra.csh.rit.edu:8088/~mdz/debian/dists/woody/mythtv/">usual place</a>.
</ul>
