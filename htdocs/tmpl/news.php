<div class="news_post inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title <?php echo $topic ?>"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h3><?php echo $title ?></h3>
        <div class="post">
            <?php echo $news ?>
        </div>
        <div class="author">
            <div class="aleft"></div>
            <i>Posted by <?php echo $author ?>
            on <?php echo date('F jS Y', $date); ?></i>
            <div class="aright"></div>
        </div>
    </div>
</div>
