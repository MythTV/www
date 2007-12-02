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
    require_once 'pages/header.php';

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

// Load the global page footer
    require_once 'pages/footer.php';


