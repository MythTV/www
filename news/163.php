<?php
    $topic  = 'news';
    $title  = 'Notice to Schedules Direct users';
    $author = 'stuartm';
    $date   = strtotime('2014-10-15 21:05:46 UTC');
?>

<p>As many of you will be aware, Schedules Direct are making some changes to their data feed. This is nothing to be alarmed about, as long as you update to the latest release of MythTV (0.27.4) everything will continue to work as it always has. There have been many scare stories and false reports in the last few weeks and we want you to know that all that is changing is the address of the server from which MythTV retrieves the guide data. This change has already been made and many people are already using the new address. For more information please see the wiki - <a href="https://www.mythtv.org/wiki/Schedules_Direct_URL_Change">Schedules Direct URL Change</a></p>

<p>Unfortunately it seems this news was confused with news of an entirely new JSON feed from Schedules Direct. This feed brings some minor improvements to the Schedules Direct service for MythTV users, and official support for it will come to MythTV through a new XMLTV grabber in due course. An <b>unofficial</b> MythTV grabber was released by Schedules Direct for this new feed but we recommend against it's use. It inserts data directly into the MythTV database, bypassing MythTV's ability to sanity check, correct and act upon information at a single point of insertion. We will be unable to assist users who run this grabber if they encounter bugs or broken features as a result.</p>

<p>So, to repeat, if you upgrade to MythTV 0.27.4 you will continue receive the same Schedules Direct service that you always have with no further action required on your behalf. Official support for the entirely new JSON feed will be added later.</p>

