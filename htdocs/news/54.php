<?php
    $topic  = 'news';
    $title  = 'November 5, 2002';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2002-11-05 22:06:56 UTC');
?>
<ul>
  <li>So, a couple nights of work, and now the edit mode is pretty much fully functional, and in CVS.  It's really simple to use, and I'm quite happy with how the UI turned out.  <a href="http://mythtv.sourceforge.net/mc/editmode.jpg">Here</a> is a shot of the basic interface.  A couple commercials have been edited out as you can see from the arrows and red sections of the slider.  While in edit mode, seeking works as normally, but hitting the up/down channel buttons/arrows selects how much to move each time -- all the way from a single frame up to 10 minutes, with special selections for the nearest video keyframe and nearest cut point.  <a href="http://mythtv.sourceforge.net/mc/editmode-insert.jpg">This</a> is a shot of the menu you get when you select a spot for a new cutpoint, and <a href="http://mythtv.sourceforge.net/mc/editmode-delete.jpg">this</a> is what you get when you select a frame within 20 seconds of an existing cutpoint.  Anyway, it doesn't yet actually go through the file and delete things/reencode yet, but it does use any editing data during playback to skip the marked sections.
</ul>
