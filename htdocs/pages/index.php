<?php
/**
 * Main index page for mythtv.org
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
    require_once 'pages/header.php';

?>

<div id="index">

<div id="index-top">

<div id="index-whatis" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h1>MythTV, Open Source DVR</h1>
        <p>
        MythTV is a Free Open Source digital video recorder (DVR) project
        distributed under the terms of the GNU GPL.  It has been under heavy
        development since 2002, and now contains most features one would expect
        from a good DVR (and many new ones that you soon won't be able to live
        without).
        </p>
        <p>
        If you are interested in learning more about MythTV (or just want to check
        out some screenshots), please take a look at
        <a href="/detail">MythTV In Detail</a>.
        </p>
    </div>
</div>

<div id="index-quicklinks" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h3>Quick Links:</h3>
        <ul>
            <li class="bug">
                <a href="http://svn.mythtv.org/trac/newticket/">Report a Bug</a>
                </li>
            <li class="wiki">
                <a href="http://wiki.mythtv.org/">MythTV Wiki</a>
                </li>
            <li class="support">
                <a href="/support/">Mailing Lists</a>
                </li>
            <li class="news">
                <a href="/news/">News Archive</a>
                </li>
            <li class="contact">
                <a href="/contact/">Contact MythTV Developers</a>
                </li>
        </ul>
    </div>
</div>

<div id="index-download" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h3>Release:</h3>
        <div class="release">
            <a href="/download">Current Release:  <?php echo $Version['tv'] ?></a>
        </div>
        <div class="download">
            <a href="/download">Download Now</a>
        </div>
        </a>
    </div>
</div>

</div><!-- index-top -->

<div id="index-news">

<?php
// How many to display?
    $num_to_display = 3;

// Display the news items
    foreach (array_reverse(get_sorted_files('news/')) as $file) {
    // Load the news file into a buffer
        ob_start();
        require "news/$file";
        $news = ob_get_contents();
        ob_end_clean();
    // Print
        require 'tmpl/news.php';
    // Displayed our max?
        if (--$num_to_display < 1)
            break;
    }
?>

<p>
    Continue reading in the <a href="/news">News Archive</a>.
</p>

</div><!-- index-news -->

</div><!-- index -->

<?php
// Load the global page footer
    require_once 'pages/footer.php';

