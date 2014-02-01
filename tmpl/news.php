<?php
/**
 * Template file for news postings.
 *
 * This file assumes that the $post array is defined and contains the necessary
 * information loaded from the various files in the news/ directory via the
 * routines in includes/news.php
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

// Make sure the author hash is loaded
    global $Authors;

// Which type of header tag to use?
    $htag = $post['solo'] ? 'h1' : 'h3';

?>
<div class="inset news-post <?php echo str_replace('_', '-', $post['topic']) ?>">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <<?php echo $htag ?>><?php echo $post['title'] ?></<?php echo $htag ?>>
        <div class="post">
            <?php echo $post['content'] ?>
            <div class="digg">
                <script type="text/javascript">
                digg_url = '<?php echo addslashes($_SERVER['HTTP_HOST'].$post['url']) ?>';
                digg_title = '<?php echo addslashes($post['title']) ?>';
                digg_media = 'news';
                digg_topic = '<?php echo _or($post['digg_topic'], 'tech_news') ?>';
                digg_bgcolor = '#e6e6f0';
                digg_skin = 'icon'; // or:  compact, or comment out completely for standard
                digg_window = 'new';
                </script>
                <script src="https://digg.com/tools/diggthis.js" type="text/javascript"></script>
            </div>
        </div>
        <div class="author">
            <div class="aleft"></div>
            <i>Posted by <?php echo $Authors[$post['author']] ?>
            on <?php echo date('F jS Y', $post['date']); ?></i>
            <div class="aright"></div>
        </div>
<?php if ($post['solo']) { ?>
        <div class="archive-link">
            <a href="/news/">&lt;&lt; Back to the news archive</a>
        </div>
<?php } ?>
    </div>
</div>
