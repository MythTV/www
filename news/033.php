<?php
    $topic  = 'announcement';
    $title  = 'August 18, 2002';
    $author = 'ijr';
    $date   = strtotime('2002-08-18 21:35:29 UTC');
?>
<ul>
<li>Release early, release often: Get <a href="/download">release 0.5</a>.  New in this release:  Support for the video codecs from libavcodec (ie, mpeg4 and much better compression, at a cost to CPU useage), and a themeable OSD blended into the video.  The default video encoding method is still the original RTjpeg from NuppelVideo, and I've also added an option to not compress the audio for those with less beefy CPUs.  See the settings.txt file for more info.  And please, pardon my DSL.  It'll be slow for a few hours after the release.
<li>Updated the two screenshots in the last update with the latest set of graphics..
<li>Added a little text status string to the pause/ff/rew status OSD, so now it tells you how far behind real time you are and how much of the buffer is left before it'll have to unpause you.  For playing back recordings, it just says where you are in the file.  I also made the pause/ff/rew OSD animate itself off the screen -- looks fairly neat =)
<li>I think I'm going to put out a new release tonight.
</ul>
