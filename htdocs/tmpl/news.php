<div class="index_news">
    <h3><?php echo $title ?></h3>
    <div class="_content">
        <?php echo $news ?>
    </div>
    <div class="_author">
        Posted by <?php echo $author ?>
        on <?php echo date('l, F j @ G:i T', $date); ?>
    </div>
</div>
