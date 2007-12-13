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
<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td rowspan="2" id="index_whatis">
        <div >
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
        </td>
    <td>
        <table id="index_quicklinks" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="icon"><img src="/img/bug.png"></td>
            <td><a href="http://svn.mythtv.org/trac/newticket/">Report a Bug</a></td>
        </tr><tr>
            <td class="icon"><img src="/img/wiki.png"></td>
            <td><a href="http://wiki.mythtv.org/">MythTV Wiki</a></td>
        </tr><tr>
            <td class="icon"><img src="/img/lists.png"></td>
            <td><a href="/support">Mailing Lists</a></td>
        </tr><tr>
            <td class="icon"><img src="/img/news.png"></td>
            <td><a href="/news/">News Archive</a></td>
        </tr><tr>
            <td class="icon"><img src="/img/contact.png"></td>
            <td><a href="/contact">Contact MythTV Developers</a></td>
            </ul>
        </tr>
        </table>
        </td>
</tr><tr>
    <td id="index_download_cell">
        <div id="index_download">
            some big icon linking to:<br /><br />
            <a href="/download">Download MythTV</a>
        </div>
        </td>
</tr>
</table>

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

