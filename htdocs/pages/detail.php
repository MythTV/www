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
    require_once 'pages/header.php';
?>


Detail article (containing screenshots) coming soon.

<h3>MythWeb</h3>

<?php thumbnail('screenshots/mythweb_listing.png', 150) ?>
<?php thumbnail('screenshots/mythweb_details.png', 150, null, 'style="margin-left: .5em"') ?>
<?php thumbnail('screenshots/mythweb_upcoming.png', 150, 150, 'style="margin-left: .5em"') ?>
<?php thumbnail('screenshots/mythweb_recorded.png', 150, 150, 'style="margin-left: .5em"') ?>

<?php
// Load the global page footer
    require_once 'pages/footer.php';
