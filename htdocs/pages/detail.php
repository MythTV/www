<?php
/**
 * Screenshots of all of the coolness...
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

// Which section are we in?
    $Nav = 'about';

// Load the global page header
    require_once 'tmpl/header.php';
?>

<div id="detail">

<h1>MythTV In Detail</h1>

<div id="detail_toc">
    <ul>
        <li><a href="#mythtv">MythTV</a></li>
        <li><a href="#mythmusic">MythMusic</a></li>
        <li><a href="#mythvideo">MythVideo</a></li>
        <li><a href="#mytharchive">MythArchive</a></li>
        <li><a href="#mythbrowser">MythBrowser</a></li>
        <li><a href="#mythcontrols">MythControls</a></li>
        <li><a href="#mythflix">MythFlix</a></li>
        <li><a href="#mythgallery">MythGallery</a></li>
        <li><a href="#mythgame">MythGame</a></li>
        <li><a href="#mythmovies">MythMovies</a></li>
        <li><a href="#mythnews">MythNews</a></li>
        <li><a href="#mythphone">MythPhone</a></li>
        <li><a href="#mythweather">MythWeather</a></li>
        <li><a href="#mythzoneminder">MythZoneminder</a></li>
        <li><a href="#mythweb">MythWeb</a></li>
    </ul>
</div><!-- #detail_toc -->

<div id="detail_content">

    <div class="content" id="detail_mythtv">

        <a name="mythtv"></a>
        <h2>MythTV</h2>

        Something about MythTV itself -- backend/frontend, distributed, etc

    </div>

    <div class="content" id="detail_mythmusic">

        <a name="mythmusic"></a>
        <h2>MythMusic</h2>

        This plugin lets you play audio files or CDs from your music collection,
        complete with visualizers.  It will also play music from your iTunes
        shared library.

    </div>

<?php /*
    <h2>MythVideo</h2>

    Video/DVD playback....

    <h2>MythArchive</h2>

    Archive your recorded programs to DVD...

    <h2>MythBrowser</h2>

    Web browser based on the KHTML rendering engine.

    <h2>MythControls</h2>

    What does this do?  Configurable key control editor?

    <h2>MythFlix</h2>

    Browse your netflix account and order movies.

    <h2>MythGallery</h2>

    Browse through and show off your photo collection.

    <h2>MythGame</h2>

    Integration with MAME, xNES and other emulators to let you play video
    games from with MythTV

    <h2>MythMovies</h2>

    Local Movie times?

    <h2>MythNews</h2>

    RSS News feed plugin.  Requires MythBrowser?

    <h2>MythPhone</h2>

    Integrate with Asterix

    <h2>MythWeather</h2>

    Local weather updates.  Does this still have bugs in the US?

    <h2>MythZoneMinder</h2>

    Link up to your ZoneMinder video surveilance system and browse all of
    your cameras from the comfort of your couch.

    <h2>MythWeb</h2>

    <p>
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('mythweb_listing.png', 'tv_grey', 'r', 'a', '#88a1bb')  ?>
    <?php tv_thumb('mythweb_details.png', 'tv_grey', 'l', 'a', '#88a1bb')  ?>
    </div>
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    </p>

    <p style="clear: right">
    <div style="float: left; margin-right: 2em">
    <?php tv_thumb('mythweb_upcoming.png', 'tv_grey', 'r', 'a', '#88a1bb')  ?>
    <?php tv_thumb('mythweb_recorded.png', 'tv_grey', 'l', 'a', '#88a1bb')  ?>
    </div>
    Maybe talk some more, and show some more screenshots...
    Maybe talk some more, and show some more screenshots...
    Maybe talk some more, and show some more screenshots...
    Maybe talk some more, and show some more screenshots...
    Maybe talk some more, and show some more screenshots...
    Maybe talk some more, and show some more screenshots...
    Maybe talk some more, and show some more screenshots...
    </p>

    <p>
    <div style="float: right; margin-left: 2em">
    <?php tv_thumb('mythweb_video.png', 'tv_grey', 'r', 'a', '#88a1bb')  ?>
    <?php tv_thumb('mythweb_recdetails.png', 'tv_grey', 'l', 'a', '#88a1bb')  ?>
    </div>
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    So this is the place where I would talk about MythWeb...
    Show a few screenshots...
    </p>
*/ ?>
</div><!-- #detail_content -->

</div><!-- #detail -->

<?php
// Load the global page footer
    require_once 'tmpl/footer.php';

