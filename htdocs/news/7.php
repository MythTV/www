<?php
    $topic  = 'news';
    $title  = 'June 3, 2002';
    $author = 'isaac';
    $date   = strtotime('2002-06-03 21:02:57 UTC');
?>
<ul>
  <li>I had the computer hooked up to the TV all weekend, and used it to watch a decent amount of TV..  I think I have almost everything I can think of working nicely for the basic 'live-tv' functionality.  Next comes enhancements to the program guide, and the ability to record programs.  I probably should write some docs sometime, too.
  <li>Fixed up the scripts to grab program data a bit. 'filldata', which was just added to CVS, is designed to run every night at 10 pm or so.  It updates the next day's program data, and fills in the next weeks worth of data.  This way, there's program info in the database to look through (that may not be completely correct when that day rolls around), and the very next day's data is updated to
the most current data available.
</ul>
