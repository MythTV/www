<?php
    $topic  = 'news';
    $title  = 'May 19, 2002';
    $author = 'ijr';
    $date   = strtotime('2002-05-19 20:58:05 UTC');
?>
<ul>
  <li>Ok, so, I got program information displaying on channel changes.  It's not integrated very well yet (need to setup autoupdates, etc), but the basics all work.  I'm using <a href="http://www.doc.ic.ac.uk/~epa98/work/apps/xmltv/">xmltv</a> to grab program information, which then gets dumped into a mysql database.  The TV app then just has to query the db for the info it needs..
  <li>Added a black outline to the channel number, so it shows up better.
  <li>Skip channels that don't come in.
  <li>Check out this <a href="mc/osd1.png">screengrab of the OSD</a>.
</ul>
