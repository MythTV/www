<?php
/**
 * MythTV in detail...
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @copyright   MythTV
 *
 * @package     mythtv.org
 *
/**/
?>
<div id="detail-mythtv" class="detail">

    <h1>MythTV</h1>

    <p>
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('tv_mainscreen.jpg', 'tv_black', 'l', 'a', '#e6e6f0', 'title="MythTV, Blue Theme"') ?>
    </div>
    We like to think of MythTV as the ultimate Digital Video Recorder and
    home media center hub.  Think of it as a Free and Open Source alternative
    to Tivo and Windows Media Center.  It started out in 2002 as a way for
    Isaac Richards to produce a better TV-viewing environment than his cable
    company's digital cable box could provide, and through the help of the open
    source community quickly grew into a powerful tool for watching and
    recording television.  With its plugin architecture, it has been
    transformed from a mere TV viewing application into a full home media
    center suite, capable of managing your personal photo, video, and music
    collections, as well as keep you up to date with the weather, a ZoneMinder
    home security system, and much, much more.
    </p>

    <h3>MythTV Features</h3>

    <div style="float: left; margin-right: 2em">
    <?php tv_thumb('tv_epg.png', 'tv_black', 'r', 'a', '#e6e6f0', 'title="MythTV, Blue Theme"') ?><br>
    <?php tv_thumb('tv_paused.png', 'tv_black', 'r', 'a', '#e6e6f0', 'title="MythTV, Blue Theme"') ?><br>
    </div>

    <ul>
        <li>Watch and record analog and/or digital TV, including HDTV.</li>
        <li>Pause, skip, and rewind live TV shows.</li>
        <li>Completely automatic commercial detection/skipping, with manual
            correction via an intuitive cutlist editor.</li>
        <li>Intelligently schedules recordings to avoid conflicts.</li>
        <li>Parental controls to keep your kids out of the good shows.</li>
        <li>Watch and archive DVDs.</li>
        <li>Listen to your digital music collection.</li>
        <li>Schedule and administer many functions remotely via a web browser.</li>
        <li>Flexible client/server architecture allows multiple frontend
            client machines to access content served by one or more backend
            servers (although the most common installation consists of a
            single computer running both the client and server together).</li>
        <li>Many more...</li>
    </ul>

    <p style="clear: both">
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('tv_editmode.jpg', 'tv_black', 'l', 'a', '#e6e6f0', 'title="MythTV, Blue Theme"') ?>
    </div>
    Though MythTV was initially written to run only on the Linux operating
    system, BSD and MacOS X are also well supported, and it has recently become
    possible to build a version that can run on Microsoft Windows.  We are
    constantly working to bring MythTV to as many users as possible, regardless
    of your preferred operating system.
    </p>

    <h3 style="clear: both">MythBackend</h3>

    <p>
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('tv_record.png', 'tv_black', 'l', 'a', '#e6e6f0', 'title="MythTV, Blue Theme"') ?>
    </div>
    The backend server application runs the core "behind the scenes"
    functionality for MythTV.  The bulk of this is taken up by scheduling and
    recording your TV shows, but also includes keeping your TV listings up to
    date, managing the database, and performing routine maintenance on any
    files generated in the recording process.  Backend servers are also
    responsible for streaming recording files to any remote frontends that do
    not have direct access to them.
    </p>

    <p>
    Having a separate backend application allows ambitious users to split their
    MythTV setup between different locations best suited to each task.  For
    instance, a powerful (i.e. large and noisy) server to host recording files
    and hardware, hidden away in a closet, and a minimal (i.e. small and quiet)
    frontend machine kept next to the TV.
    </p>

    <h3 style="clear: both">MythFrontend</h3>

    <p>
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('tv_resolveconflict.png', 'tv_black', 'r', 'a', '#e6e6f0', 'title="MythTV, Blue Theme"') ?>
    <?php tv_thumb('tv_pip.jpg', 'tv_black', 'l', 'a', '#e6e6f0', 'title="MythTV, Blue Theme"') ?>
    </div>
    The frontend client is the human interface to MythTV.  This is where you
    watch TV, listen to music, etc.  Each frontend communicates with one or
    more backend servers in order to determine which recorded shows are
    available to be watched, or which TV tuners are available to watch live TV.
    </p>

    <p>
    In addition to this, the frontend also provides access to system status,
    the TV listings guide (so you can schedule new recordings), upcoming shows
    that will be recorded, and much more.  If you install plugins like
    MythMusic and MythVideo (so you can watch a DVD or listen to music), you
    will also see these listed in the frontend.  As you can see from the table
    of contents for this guide, there are many plugins to choose from.
    </p>

    <h3>Credits</h3>

    <p>
    MythTV is maintained by Isaac Richards, who maintains loose leadership
    and guidance over the dozens of other developers who each work on one or
    more pieces that make up the software suite.
    </p>

    <p>
    Read more about MythTV in the <a href="http://www.mythtv.org/wiki/" title="MythTV Wiki">MythTV Wiki</a>,
    including the <a href="http://www.mythtv.org/wiki/Screenshots">Screenshots</a>
    wiki page with user-contributed content.
    </p>

</div>
