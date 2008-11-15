<?php
    $topic  = 'announcement';
    $title  = 'Want some Myth?  \'Course ya do!';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2004-05-26 22:19:25 UTC');
?>
<ul>
  <li>Ah, yeah.  Been almost 4 months since the last release.  Sorry about that, but first I was busy looking for a job, and then I was busy with my new job..  There's just not enough time for everything.
  <li>Anyway, since it's been a very long time since 0.14, I'll just go over the major changes in 0.15:
  <ul>
    <li>There's been a major scheduler update from David Engel and Bruce Markey.
    <li>Some guy named 'mian' submitted a patch that lets you switch between capture cards in Live-TV mode.
    <li>New Music selection interface.
    <li>New menu for the OSD during TV watching.
    <li>MMX optimizations to the OSD rendering process due to me, with some additional enhancements by Andrew Mahone.  It's much faster now. =)
    <li>Chris Pinkham added the ability to categorize recorded programs into groups and display only certain groups from the UI, a new commercial detection method based on station logos, and some zoom functionality to video playback.
    <li>Lots of translation updates from quite a number of people -- see the dev list
for details.
    <li>Native Zap2it DataDirect support contributed by David Shay.  See the docs <a href="http://www.mythtv.org/docs/mythtv-HOWTO-5.html#ss5.4">here</a> and <a href="http://www.mythtv.org/docs/mythtv-HOWTO-21.html#ss21.19">here</a> for instructions on how to register for this free listings service and how to migrate from tv_grab_na.  No more XMLTV dependency for North American users.  <b>Very</b> cool stuff.
    <li>MythWeb saw quite a bit of development by Chris Petersen and a number of other contributors.
    <li>The only other plugins that got any major amount of work were MythVideo and MythGame -- both received a number of internal and minor updates.
  </ul>
   <li>As usual, apologies if I forgot to mention anyone's contributions, but this is just a very quick overview from browsing through the commits list archives.  I was rushed this time, and there were a _lot_ of commits to go through.
  <li>Grab the release from the  <a href="http://www.mythtv.org/modules.php?name=Downloads">download section</a> and please at least try to read the <a href="http://www.mythtv.org/modules.php?name=MythInstall">docs</a> before asking questions. 
  <li>The <a href="http://www.mythtv.org/modules.php?name=Web_Links&l_op=viewlink&cid=1">binary packages</a> should hopefully be updated to 0.15 soon.
  <li>See this <a href="http://www.mythtv.org/modules.php?name=Web_Links&l_op=viewlink&cid=3">links section</a> for a list of complete linux distributions based around MythTV.
</ul>
