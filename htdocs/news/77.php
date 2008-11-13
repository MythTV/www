<?php
    $topic  = 'news';
    $title  = 'News, news, news';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2003-04-30 20:52:04 UTC');
?>
<ul>
  <li>I've updated the <a href="http://www.mythtv.org/modules.php?name=MythFeatures">screenshot page</a> to reflect the current state of CVS.  John Danner's been working overtime with his GUI remake, and the results are excellent.  Check out all the new screenshots.  Every major dialog in MythTV (and MythVideo) is completely themeable now -- MythMusic and MythGame will be reworked similarly in the future.  There's some good looking themes in the works, so stay tuned. =)
  <li>In other news, the WinTV PVR-250 and 350 are now fully supported to the same extent analog cards are -- aside from the larger files and lower CPU requirements, you really shouldn't even be able to tell it's offloading all the difficult work to the tuner card. =)  Commercial skipping, edit mode, etc, everything works well.  Just make sure to load the ivtv driver with debug mode turned off (assuming you're not having problems with the driver, of course), else you'll fill up your harddrive with debugging messages like I just accidently did.
  <li>My current TODO list is really tiny, so I'm thinking of putting out the next release, 0.9, fairly soon.
</ul>
