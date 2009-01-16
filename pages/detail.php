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

// We need something to get details about
    if (empty($Path[1])) {
        redirect_browser('/detail/mythtv', 301);
    }

// Sections we'll be interfacing with
    $sections = array(
        'mythtv'         => 'MythTV',
        'mytharchive'    => 'MythArchive',
        #'mythbrowser'    => 'MythBrowser',
        #'mythcontrols'   => 'MythControls',
        #'mythflix'       => 'MythFlix',
        'mythgallery'    => 'MythGallery',
        #'mythgame'       => 'MythGame',
        #'mythmovies'     => 'MythMovies',
        'mythmusic'      => 'MythMusic',
        #'mythnews'       => 'MythNews',
        #'mythphone'      => 'MythPhone',
        'mythvideo'      => 'MythVideo',
        #'mythweather'    => 'MythWeather',
        'mythweb'        => 'MythWeb',
        #'mythzoneminder' => 'MythZoneMinder',
        '-' => null,
        'other-plugins'  => 'Other Plugins',
        'mythtv-themes'  => 'MythTV Themes',
        'mythtv-extras'  => 'MythTV Extras',
        );


// Check that the file exists, and 404 if it doesn't
    if (!file_exists(root.'pages/detail/'.$Path[1].'.php')) {
        redirect_browser('/detail/mythtv', 404);
    }
    elseif (!$sections[$Path[1]]) {
        redirect_browser('/detail/mythtv', 404);
    }

// Title, meta escription, etc.
    $Meta['title'] = $sections[$Path[1]].' in Detail';
    $Meta['description'] = 'Detailed description and screenshots of '
        .implode(':  ', array_unique(array('MythTV', $sections[$Path[1]])));
    $Meta['keywords'] = implode(',',array_unique(array(
        $sections[$Path[1]], 'MythTV',
        'detail', 'overview', 'description', 'screenshot', 'screenshots'
        )));

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
            <h3>In Detail:</h3>
            <ul>
<?php
        foreach ($sections as $url => $name) { ?>
                <li<?php
                    if ($url == $Path[1]) {
                        echo ' class="selected"';
                    }
                    if ($name) {
                    ?>><a href="/detail/<?php echo $url ?>" title="<?php echo $name ?> in detail"><?php
                        echo $name ?></a><?php
                    }
                    else {
                        echo '<br>';
                    }
                    ?></li>
<?php   } ?>
            </ul>
        </div><!-- #detail-toc -->
        <div id="detail-content">
<?php           require_once 'pages/detail/'.$Path[1].'.php' ?>
        </div><!-- #detail-content -->
    </div><!-- class:content -->
</div><!-- #detail -->

<?php
// Load the global page footer
    require_once 'tmpl/footer.php';

