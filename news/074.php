<?php
    $topic  = 'announcement';
    $title  = 'New Version, 0.8, is finally released.';
    $author = 'ijr';
    $date   = strtotime('2003-03-16 16:10:32 UTC');
?>
<ul>
  <li>And now, at long last, the eighth release of MythTV. It's been quite a while since 0.7, and many things have changed.  Here's a summary of some of the more important/larger/visible changes:
  <ul>
    <li>New split up encoding/playback architecture.  Multiple encoding machines, multiple playback machines, all pretty transparent to the user.
    <li>Basic "still being written so it doesn't always work right but does work pretty well" automatic commercial detection and skipping, by Chris Pinkham.
    <li>Graphical setup for everything in MythTV (modules like MythMusic are still text for now, though), written by Matt Zimmerman.
    <li>New alternative style for the program guide (with embedded video), and an easy way to search for specific programs, written by John Danner.
    <li>All dialogs now follow the menu theme colors/background.
    <li>Basic hardware MJPEG encoding support (Matrox Marvel G200, etc).
    <li>Many, many internal changes.
    <li>New MythWeather module, contributed by John Danner.
    <li>New MythVideo module, which is just a generic video player frontend.
    <li>NES, SNES, and generic PC game support added to MythGame, by Todd Malsbary and Chuck.
    <li>Quite a few changes to MythWeb, like a movies listing page, ability to delete recorded programs, etc.
    <li>More visualization modes in MythMusic.
    <li>More themes to ogle at.
  </ul>
  <li>Anyway, grab things from the <a href="/download">downloads section</a>, and read the <a href="/docs">documentation</a>.  Make sure to do what it says in the UPGRADING file if you're coming from 0.7.
  <li>Thanks to everyone who has contributed code or time to MythTV =)
  <li>Debian packages of the new release will be available shortly from <a href="http://dijkstra.csh.rit.edu:8088/~mdz/debian/dists/woody/mythtv/">here</a> as usual.
</ul
