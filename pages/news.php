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

// Load the news display engine
    require_once 'includes/news.php';

// Requesting a specific file?  Show only that file.
    if ($Path[1]) {
        $post = load_news($Path[1]);
    // Unknown news post?
        if (!$post) {
            require_once 'pages/404.php';
            #redirect_browser('/news/', 404);
        }
    // Make sure the URL is correct (for SEO)
        if ($post['url'] != $_SERVER['REQUEST_URI']) {
            redirect_browser($post['url'], 301);
        }
    // Now that we've passed the redirect point, we can load the global page header
        require_once 'tmpl/header.php';
    // Display the page.
        $post['solo'] = true;
        require 'tmpl/news.php';
    }
// Otherwise, display the list of all previous posts.
    else {
    // Load the global page header
        require_once 'tmpl/header.php';
    // Load all news headers
        $news = load_news_headers();
?>
<div id="news-archive" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h1>MythTV News Archive:</h1>
        <ul>
<?php
    // Print the list of files
        foreach ($news as $post) {
?>
            <li><a href="<?php echo $post['url'] ?>">
                <span class="date"><?php echo date('Y-m-d', $post['date']) ?>:</span>
                <?php echo $post['title'] ?></a>
                <span class="topic">(<?php echo str_replace('_', ' ', $post['topic']) ?>)</span>
                </li>
<?php
        }
?>
        </ul>
    </div>
</div><!-- news-archive -->
<?php
    }

// Load the global page footer
    require_once 'tmpl/footer.php';
