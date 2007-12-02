<div class="news_post">
    <h3><?php echo $title ?></h3>
    <div class="post_content">
        <?php echo $news ?>
    </div>
    <div class="post_author">
        Posted by <?php echo $author ?>
        on <?php echo date('l, F j @ G:i T', $date); ?>
    </div>
</div>
