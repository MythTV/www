<?php
/**
 * Display archived news items.
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @copyright   mythtv.org
 *
 * @package     mythtv.org
 *
/**/

// Which section are we in?
    $Nav = 'news';

// Load the global page header
    require_once 'tmpl/header.php';

// Requesting a specific file?
    if ($Path[1]) {
        if (file_exists('news/'.$Path[1].'.php')) {
        // Load the news file into a buffer
            ob_start();
            require 'news/'.$Path[1].'.php';
            $news = ob_get_contents();
            ob_end_clean();
        // Print
            require 'tmpl/news.php';
        }
        else {
            redirect_browser('/');
        }
    }
// Display the list
    else {
?>
<div id="old_news">
    <h3>News Archive:</h3>
    <ul>
<?php
    // Get the list of files
        foreach (array_reverse(get_sorted_files('news/')) as $file) {
            if (!preg_match('/^(\d+)\.php$/', $file, $link))
                continue;
            $link = $link[1];
        // Load info about this news item
            ob_start();
            require "news/$file";
            ob_end_clean();
        // Print what we know
            echo "<li><a href=\"/news/$link/", str_replace('/', '-', urlencode($title)), '">',
            '<span class="date">', date('Y-m-d', $date), ':</span>',
            "$title</a></li>\n";
        }
?>
    </ul>
</div>
<?php
    }

// Load the global page footer
    require_once 'tmpl/footer.php';