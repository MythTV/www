<?php
    $topic  = 'news';
    $title  = 'Notice to Schedules Direct users';
    $author = 'stuartm';
    $date   = strtotime('2014-10-15 21:05:46 UTC');
?>

<p>As many of you will be aware, Schedules Direct are making some changes to their data feed. This is nothing to be alarmed about, as long as you update to the latest release of MythTV (0.27.4) everything will continue to work as it always has. There have been many scare stories and false reports in the last few weeks and we want you to know that all that is changing is the address of the server from which MythTV retrieves the guide data. This change has already been made and many people are already using the new address.</p>

<p>Unfortunately it seems this change was mixed with news of an entirely new JSON feed from Schedules Direct. This feed brings some minor improvements to the Schedules Direct service, but MythTV has decided not to use it at this time. An <b>unofficial</b> MythTV grabber was released by Schedules Direct for this new feed without consultation with the MythTV team. <b>Please do not use this grabber!</b>. It makes unsanctioned changes to the MythTV database schema which will break future upgrades. It also inserts data directly into the MythTV database, bypassing MythTV's ability to sanity check, correct and act upon information at a single point of insertion. This grabber is dangerous to the health of your MythTV system.</p>

<p>So let me repeat, if you upgrade to MythTV 0.27.4 you will continue to use Schedules Direct with no further action required on your behalf. Do not use any of the other unofficial solutions such as the 'JSON' grabber from Schedules Direct.</p>

