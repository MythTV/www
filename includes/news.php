<?php
/**
 * Shared routines for the MythTV News display engine
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

/**
 * Directory containing all of the news.php files.
 *
 * @global  string   $GLOBALS['NewsDir']
 * @name    $NewsDir
/**/
    global $NewsDir;
    $NewsDir = root.'/news';

/**
 * Load and return the contents of a news post file.
 *
 * @param int  $id              News ID number.
 * @param bool $load_content    Whether or not to load the full post content.
 *
 * @return array Hash of the news data, or null
/**/
    function load_news($id, $load_content=true) {
        global $NewsDir;
    // Make sure the file exists
        if (!file_exists("$NewsDir/$id.php")) {
            return null;
        }
    // Define some variables to keep the error logs quiet, in case they are not
    // defined in the news file itself;
        $title      = null;
        $date       = null;
        $topic      = null;
        $digg_topic = null;
        $author     = null;
    // Load the news file and pull its data into an array
        ob_start();
        require "$NewsDir/$id.php";
        $post = array(
            'id'         => $id,
            'title'      => $title,
            'date'       => $date,
            'topic'      => $topic,
            'digg_topic' => $digg_topic,
            'solo'       => false,
            'author'     => $author,
            'url'        => "/news/$id/".str_replace('/', '-', urlencode($title)),
            );
        if ($load_content) {
            $post['content'] = ob_get_contents();
        }
        ob_end_clean();
    // Return
        return $post;
    }

/**
 * Scan through the news archives and load
 *
 * @return array Array of the meta data in all news post files
/**/
    function load_news_headers() {
        global $NewsDir;
        $news = array();
    // Get the list of files
        foreach (array_reverse(get_sorted_files($NewsDir)) as $file) {
            if (!preg_match('/^(\d+)\.php$/', $file, $id))
                continue;
            $id = $id[1];
        // Load info about this news item
            $post = load_news($id, false);
        // Add this to the list
            $news[$id] = $post;
        }
        return $news;
    }

/**
 * Load and display $qty recent news posts
 *
 * @param int $qty Quantity of recent news entries to print
/**/
    function print_recent_news($qty) {
        global $NewsDir;
    // Display the news items
        foreach (array_reverse(get_sorted_files($NewsDir)) as $file) {
            if (!preg_match('/^(\d+)\.php$/', $file, $id))
                continue;
            $id = $id[1];
        // Load info about this news item
            $post = load_news($id, true);
        // Print
            require 'tmpl/news.php';
        // Displayed our max?
            if (--$qty < 1)
                break;
        }
    }

/**
 * Load $qty recent news posts, including content
 *
 * @param int $qty Quantity of recent news entries to print
 *
 * @return array Array of full data data in the requested news posts
/**/
    function load_recent_news($qty) {
        global $NewsDir;
        $news = array();
    // Display the news items
        foreach (array_reverse(get_sorted_files($NewsDir)) as $file) {
            if (!preg_match('/^(\d+)\.php$/', $file, $id))
                continue;
            $id = $id[1];
        // Load info about this news item
            $post = load_news($id, true);
        // Add this to the list
            $news[$id] = $post;
        // Displayed our max?
            if (--$qty < 1)
                break;
        }
        return $news;
    }

