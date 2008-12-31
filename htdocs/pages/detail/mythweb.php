<?php
/**
 * MythTV in detail...
 *
 * @url         $URL: svn+ssh://svn.mythtv.org/var/lib/svn-www/www.mythtv.org/htdocs/pages/detail.php $
 * @date        $Date: 2008-11-15 21:02:20 -0800 (Sat, 15 Nov 2008) $
 * @version     $Revision: 125 $
 * @author      $Author: xris $
 * @copyright   MythTV
 *
 * @package     mythtv.org
 *
/**/
?>
<div id="detail-mythweb" class="detail">
    <a name="mythweb"></a>
    <h1>MythWeb</h1>

    <p>
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('mythweb_listing.png', 'tv_black', 'r', 'a', '#e6e6f0', 'title="MythWeb TV Listings"') ?>
    <?php tv_thumb('mythweb_details.png', 'tv_black', 'l', 'a', '#e6e6f0', 'title="MythWeb TV Show Details"') ?>
    </div>
    At its most basic, MythWeb is the web-based remote access tool for MythTV.
    It has been designed as a supplemental interface for MythTV that can take
    advantage of the larger screen real estate offered by a web page compared to
    a TV screen.  Its primary purpose is to provide the user with an easily
    accessible interface to MythTV's listings data (i.e. what's on when, and
    where) so users can quickly find desired shows and schedule them to be
    recorded.
    </p>

    <p style="clear: right">
    <div style="float: left; margin-right: 2em">
    <?php tv_thumb('mythweb_upcoming.png', 'tv_black', 'r', 'a', '#e6e6f0', 'title="MythWeb Upcoming Recordings"') ?>
    </div>
    Once you have set up a few recording schedules (either with MythTV itself or
    from within MythWeb), you will be able to use MythWeb to pull up a list of
    the specific shows that MythTV will be recording for you, as well as see if
    any conflicts have been detected.  MythWeb provides a simple interface for
    resolving conflicts, enabling/disabling specific showings, and quickly
    viewing details about the shows themselves, including what other scheduled
    recordings might conflict.
    </p>

    <p style="clear: left">
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('mythweb_recorded.png',   'tv_black', 'r', 'a', '#e6e6f0', 'title="MythWeb Recorded Shows"') ?>
    <?php tv_thumb('mythweb_recdetails.png', 'tv_black', 'l', 'a', '#e6e6f0', 'title="MythWeb Recording Details"') ?>
    </div>
    Once you've recorded a few shows, you will also be able to see them in
    MythWeb, along with a small thumbnail screenshot from the first few minutes
    of the show.  You can perform basic maintenance on the files from this list
    view (e.g. delete shows you have already watched), or view them in more
    detail on their own page, which gives you access to more information about
    the show as well as a few more actions to perform on the recording file.
    </p>
    <p>
    The screenshot to the right shows off the highly experimental flash-based
    video player that (when enabled) can be used to watch the show right from
    your browser.
    </p>

    <p style="clear: right">
    <div style="float: left; margin-right: 2em">
    <?php tv_thumb('mythweb_video.png', 'tv_black', 'r', 'a', '#e6e6f0', 'title="MythWeb Video Listings"') ?>
    </div>
    MythWeb also contains plugins that provide basic interaction with some of
    the more popular plugins like MythVideo and MythMusic.
    </p>
    <p>
    You will also find that we are constantly playing with new features in the
    hope of making MythWeb an integral part of the MythTV experience.  The most
    notable of these on the horizon (which we can hopefully finish before the
    next version of MythTV is released) is an iPod/iPhone skin that provides an
    experience specifically designed for ease of use on the iPhone, including
    video streaming and remote control of your MythTV frontends.
    </p>

    <p style="clear: both">
    MythWeb is currently maintained by
    <a href="http://www.mythtv.org/wiki/index.php/User:Xris">Chris Petersen</a> (a.k.a. xris)
    and
    <a href="http://www.mythtv.org/wiki/index.php/User:Kormoc">Rob Smith</a> (a.k.a. kormoc).
    </dd>
    </p>

</div>