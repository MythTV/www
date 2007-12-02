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
<div id="index_whatis">
    <h3>What Is MythTV?</h3>
    <p class="quote">
    "I got tired of the rather low quality cable box that AT&amp;T Broadband
    provides with their digital cable service.  It's slow to change channels,
    ridden with ads, and the program guide is a joke.  So, I figured it'd be
    fun to try and build a replacement.  Yes, I could have just bought a TiVo,
    but I wanted to have more than just a PVR &mdash; I want a web browser
    built in, a mail client, maybe some games.  Basically, I want the mythical
    convergence box that's been talked about for a few years now."
    <span class="signature">- Isaac Richards</span>
    </p>
    <p>
    MythTV is a Free Open Source digital video recorder (DVR) project that has
    been under heavy development since 2002, and now contains most features one
    would expect from a good DVR (and many new ones that you soon won't be able
    to live without).
    </p>
    <p>
    If you are interested in learning more about MythTV (or just want to check
    out some screenshots), please take a look at
    <a href="/detail">MythTV In Detail</a>.
    </p>
</div>

<div id="index_quicklinks">
<h3>Quick Links:</h3>
    <ul>
        <li><a href="http://svn.mythtv.org/trac/newticket/">Report a Bug</a></li>
        <li><a href="http://wiki.mythtv.org/">MythTV Wiki</a></li>
        <li><a href="/support">Mailing Lists</a></li>
        <li><a href="/news/">News Archive</a></li>
        <li><a href="/contact">Contact MythTV Developers</a></li>
    </ul>
    <hr />
    Download MythTV:
    <ul>
        <li>Current version:  0.20</li>
    </ul>
</div>

&nbsp;<!-- css glitch:  IE 7 seems to need this -->

<div id="index_news">

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

</div>

<?php
// Load the global page footer
    require_once 'pages/footer.php';

