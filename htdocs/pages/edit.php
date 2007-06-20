<?php

// Don't allow anyone in without the right IP address
    if (!$Edit)
        redirect_browser('/');

// Load up the various options
    if ($_Path[1] == 'post') {
    }
    elseif ($Path[1] == 'conf') {
    }
    else {
?>
    <ul>
        <li><a href="/edit/conf">Post</a></li>
        <li><a href="/edit/conf">Configure</a></li>
    </ul>
<?php
    }