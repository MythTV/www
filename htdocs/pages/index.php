<div id="index_header">
    <h3>What Is MythTV?</h3>
    MythTV is a homebrew PVR project that I've been working on in my spare
    time.  It's been under heavy development since 2002, and now contains
    most features one would expect from a good PVR (and many you might not
    have thought of but soon won't be able to live without).
    <p>
    Give a little more overview, and link to <a href="/about">About</a>.
</div>

<div id="index_header2">
    <h3>Some other info?</h3>
    <p>
    Give some quick links, maybe a little more overview, a link to <a href="/about">About</a>?
</div>

<div style="float: left">
<?php
// How many to display?
    $num_to_display = 2;

// Display the news items
    foreach (array_reverse(get_sorted_files('news/')) as $file) {
    // Load the news file into a buffer
        ob_start();
        require "news/$file";
        $news = ob_get_contents();
        ob_end_clean();
    // Print
        require 'tmpl/news.php';
    // Displayed our max?
        if (--$num_to_display < 1)
            break;
    }
?>

<a href="">Older news...</a>
<br /><br />
</div>
