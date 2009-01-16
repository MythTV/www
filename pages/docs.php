<?php
/**
 * Official MythTV Documentation
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
    $Nav = 'support';

// Path to the mythtv documentation checkout
    $docs_path = '../myth_svndocs';

// Load up the proper documentation file
    if ($Path[1] && file_exists("$docs_path/".$Path[1]))
        $file = "$docs_path/".$Path[1];
    else
        $file = "$docs_path/index.html";

// Non-HTML files should just get sent
    if (preg_match('/\.(eps|gif|jpg|png|pdf|sgml|txt|patch|cpp)$/i', $file)) {
        /* note that mime_content_type is deprecated and should be replaced
         * with finfo_file as soon as we upgrade to php >= 5.3 */
        $mime = mime_content_type($file);
        header("Content-type: $mime");
        readfile($file);
        exit;
    }

// Load the global page header
    require_once 'tmpl/header.php';

// Make sure we wrap it in an inset style div
?>
<div id="official-docs" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
<?php

// Cleanup and output
    echo preg_replace(array('/^.+?<body[^>]*>\s+/si', '/<\\/body>.+?$/si'),
                      array('',                       ''),
                      file_get_contents($file)
                     );

// Close out the inset div
?>
    </div>
</div>
<?php

// Load the global page footer
    require_once 'tmpl/footer.php';


