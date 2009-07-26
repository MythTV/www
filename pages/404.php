<?php
/**
 * 404 Page
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @copyright   Chris Petersen
 *
 * @package     forevermore.net
 *
/**/

// No nav section
    $Nav = '';

// This is a 404, but we may not want to execute the custom google analytics
// 404 identifier code if the path the browser shows is already showing /404/
    global $is404;
    $is404 = ($Path[0] == '404'
        ? false
        : true
        );

// Print the obligatory header
    header('HTTP/1.0 404 Not Found');

// Meta Info
    $Meta['title']       = 'File Not Found';
    $Meta['description'] = '';

// Load the global page header
    require_once 'tmpl/header.php';
?>

<div id="notfound" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">

    <h1>File Not Found</h1>

    <p>
    The page you requested does not exist.
    </p>

<script type="text/javascript">
var GOOG_FIXURL_LANG = 'en';
var GOOG_FIXURL_SITE = 'http://www.forevermore.net/';
</script>
<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>

    </div><!-- .content -->
</div><!-- #notfound -->

<?php
// Load the global page footer
    require_once 'tmpl/footer.php';

// Force an Exit
    exit;