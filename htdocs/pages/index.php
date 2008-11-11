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
<!-- Someone tell me how I can do this without needing tables to keep things pretty! -->
<div id="index_whatis">
    <div>
        <div id="whatis_head">
        </div>
        <h3>What Is MythTV?</h3>
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

<div id="index_quicklinks">
    <div>
        <div id="quicklinks_head">
        </div>
        <ul>
            <li><a href="http://svn.mythtv.org/trac/newticket/">
                <img src="/img/bug_icon.png" border="0">
                <span class="text">Report a Bug</span></a>
                </li>
            <li><a href="http://wiki.mythtv.org/">
                <img src="/img/wiki_icon.png" border="0">
                <span class="text">MythTV Wiki</span></a>
                </li>
            <li><a href="/support/">
                <img src="/img/lists_icon.png" border="0">
                <span class="text">Mailing Lists</span></a>
                </li>
            <li><a href="/news/">
                <img src="/img/news_icon.png" border="0">
                <span class="text">News Archive</span></a>
                </li>
            <li><a href="/contact/">
                <img src="/img/contact_icon.png" border="0">
                <span class="text">Contact MythTV Developers</span></a>
                </li>
        </ul>
    </div>
</div>

<div id="index_download">
    <div>
        <a href="/download">
        <img src="/img/download.gif" height="37" width="37" border="0" style="float: left">
        Download MythTV
        </a>
    </div>
</div>

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

