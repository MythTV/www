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

// Load up the proper documentation file
    if ($Path[1] && file_exists('myth_docs/'.$Path[1]))
        $file = 'myth_docs/'.$Path[1];
    else
        $file = 'myth_docs/index.html';

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


