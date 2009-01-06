<?php
/**
 * Print an Atom or RSS feed of the news archive.
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

// Load the news display engine
    require_once 'includes/news.php';

// And the RSS/Atom libraries
    require_once 'includes/FeedItem.php';
    require_once 'includes/FeedWriter.php';

// Load recent news headers
    $news = load_recent_news(10);

// Type of feed?
    $feed_type = ATOM;
    if (array_key_exists('rss', $_GET)) {
        $feed_type = RSS2;
    }

// Create a new feed
    $Feed = new FeedWriter($feed_type);
    $Feed->setTitle('MythTV.org News');
    $Feed->setLink('http://'.$_SERVER['HTTP_HOST'].'/');
    $Feed->setDescription('Recent news about MythTV and related topics.');

// Add the loaded news items
    foreach ($news as $post) {
        $item = $Feed->createNewItem();

        $item->setTitle($Topics[$post['topic']].':  '.$post['title']);
        $item->setDate($post['date']);

        $item->setLink('http://'.$_SERVER['HTTP_HOST'].'/'.$post['url']);
        $item->setContent($post['content']);

        $Feed->addItem($item);
    }

// Send it to the browser
    $Feed->generateFeed();
