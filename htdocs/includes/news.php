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
 * Load and return the contents of a news post file.
 *
 * @param int  $id              News ID number.
 * @param bool $load_content    Whether or not to load the full post content.
 *
 * @return array Hash of the news data, or null
/**/
    function load_news($id, $load_content=true) {
    // Make sure the file exists
        if (!file_exists("news/$id.php")) {
            return null;
        }
    // Load the news file and pull its data into an array
        ob_start();
        require "news/$id.php";
        $post = array(
            'id'     => $id,
            'title'  => $title,
            'date'   => $date,
            'topic'  => $topic,
            'author' => $author,
            'url'    => "/news/$id/".str_replace('/', '-', urlencode($title)),
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
        $news = array();
    // Get the list of files
        foreach (array_reverse(get_sorted_files('news/')) as $file) {
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
    // Display the news items
        foreach (array_reverse(get_sorted_files('news/')) as $file) {
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
        $news = array();
    // Display the news items
        foreach (array_reverse(get_sorted_files('news/')) as $file) {
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

