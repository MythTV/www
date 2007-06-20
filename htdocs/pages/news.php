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
    <h3>Old News:</h3>
    <p>
<?php
    // Get the list of files
        foreach (array_reverse(get_sorted_files('news/')) as $file) {
            preg_match('/^(\d+)/', $file, $link);
            $link = $link[0];
        // Load info about this news item
            ob_start();
            require "news/$file";
            ob_end_clean();
        // Print what we know
            echo "<a href=\"/news/$link/", str_replace('/', '-', urlencode($title)), '">',
                 date('Y-m-d', $date), ":  $title</a><br />\n";

        }
?>
    </p>
</div>
<?php
    }