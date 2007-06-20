<?php

// Load up the various options
    if ($Path[1] && file_exists('myth_docs/'.$Path[1]))
        readfile('myth_docs/'.$Path[1]);
    else
        readfile('myth_docs/index.html');
