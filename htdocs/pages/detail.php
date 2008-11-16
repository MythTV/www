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

<div id="detail" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <div id="detail-toc">
            <h1>MythTV In Detail</h1>
            <ul>
                <li><a href="#mythtv">MythTV</a></li>
                <li><a href="#mytharchive">MythArchive</a></li>
                <li><a href="#mythbrowser">MythBrowser</a></li>
                <li><a href="#mythcontrols">MythControls</a></li>
                <li><a href="#mythflix">MythFlix</a></li>
                <li><a href="#mythgallery">MythGallery</a></li>
                <li><a href="#mythgame">MythGame</a></li>
                <li><a href="#mythmovies">MythMovies</a></li>
                <li><a href="#mythmusic">MythMusic</a></li>
                <li><a href="#mythnews">MythNews</a></li>
                <li><a href="#mythphone">MythPhone</a></li>
                <li><a href="#mythvideo">MythVideo</a></li>
                <li><a href="#mythweather">MythWeather</a></li>
                <li><a href="#mythweb">MythWeb</a></li>
                <li><a href="#mythzoneminder">MythZoneminder</a></li>
            </ul>
        </div><!-- #detail-toc -->
        <div id="detail-content">

        <div id="detail-mythtv" class="detail">
            <a name="mythtv"></a>
            <h2>MythTV</h2>

            Something about MythTV itself -- backend/frontend, distributed, etc

        </div>

        <div id="detail-mythmusic" class="detail">
            <a name="mythmusic"></a>
            <h2>MythMusic</h2>

            This plugin lets you play audio files or CDs from your music collection,
            complete with visualizers.  It will also play music from your iTunes
            shared library.

        </div>

        <div id="detail-mythvideo" class="detail">
            <a name="mythvideo"></a>
            <h2>MythVideo</h2>

            Video/DVD playback....
        </div>

        <div id="detail-mytharchive" class="detail">
            <a name="mytharchive"></a>
            <h2>MythArchive</h2>

            Archive your recorded programs to DVD...
        </div>

        <div id="detail-mythbrowser" class="detail">
            <a name="mythbrowser"></a>
            <h2>MythBrowser</h2>

            Web browser based on the KHTML rendering engine.
        </div>

        <div id="detail-mythcontrols" class="detail">
            <a name="mythcontrols"></a>
            <h2>MythControls</h2>

            What does this do?  Configurable key control editor?
        </div>

        <div id="detail-mythflix" class="detail">
            <a name="mythflix"></a>
            <h2>MythFlix</h2>

            Browse your netflix account and order movies.
        </div>

        <div id="detail-mythgallery" class="detail">
            <a name="mythgallery"></a>
            <h2>MythGallery</h2>

            Browse through and show off your photo collection.
        </div>

        <div id="detail-mythgame" class="detail">
            <a name="mythgame"></a>
            <h2>MythGame</h2>

            Integration with MAME, xNES and other emulators to let you play video
            games from with MythTV
        </div>

        <div id="detail-mythmovies" class="detail">
            <a name="mythmovies"></a>
            <h2>MythMovies</h2>

            Local Movie times?
        </div>

        <div id="detail-mythnews" class="detail">
            <a name="mythnews"></a>
            <h2>MythNews</h2>

            RSS News feed plugin.  Requires MythBrowser?
        </div>

        <div id="detail-mythphone" class="detail">
            <a name="mythphone"></a>
            <h2>MythPhone</h2>

            Integrate with Asterix
        </div>

        <div id="detail-mythweather" class="detail">
            <a name="mythweather"></a>
            <h2>MythWeather</h2>

            Local weather updates.  Does this still have bugs in the US?
        </div>

        <div id="detail-mythzoneminder" class="detail">
            <a name="mythzoneminder"></a>
            <h2>MythZoneMinder</h2>

            Link up to your ZoneMinder video surveilance system and browse all of
            your cameras from the comfort of your couch.
        </div>

        <div id="detail-mythweb" class="detail">
            <a name="mythweb"></a>
            <h2>MythWeb</h2>

            <p>
            <div style="float: right; margin-left: 2em">
            <?php tv_thumb('mythweb_listing.png', 'tv_black', 'l', 'a', '#e6e6f0')  ?>
            <?php tv_thumb('mythweb_details.png', 'tv_black', 'r', 'a', '#e6e6f0')  ?>
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
            <?php tv_thumb('mythweb_upcoming.png', 'tv_black', 'l', 'a', '#e6e6f0')  ?>
            <?php tv_thumb('mythweb_recorded.png', 'tv_black', 'r', 'a', '#e6e6f0')  ?>
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
            <?php tv_thumb('mythweb_video.png',      'tv_black', 'l', 'a', '#e6e6f0')  ?>
            <?php tv_thumb('mythweb_recdetails.png', 'tv_black', 'r', 'a', '#e6e6f0')  ?>
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
        </div>

        </div><!-- #detail-content -->
    </div><!-- class:content -->
</div><!-- #detail -->

<?php
// Load the global page footer
    require_once 'tmpl/footer.php';

