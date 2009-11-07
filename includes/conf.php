<?php
/**
 * Config for mythtv.org
/**/

// Authors
    global $Authors;
    $Authors = array(
        'ijr'  => '<a href="http://www.mythtv.org/">Isaac</a>',
        'xris' => '<a href="http://www.mythtv.org/wiki/User:Xris">xris</a>',
        'janne' => '<a href="http://www.mythtv.org/">Janne</a>',
        'danielk' => '<a href="http://www.mythtv.org/">Daniel</a>',
        );

// Topics
    global $Topics;
    $Topics = array(
        'news'          => 'News',
        'announcement'  => 'Announcement',
        'software_news' => 'Software News',
        'theme_news'    => 'Theme News',
        );

// Current version of MythTV
    global $Version;
    $Version = array(
        'tv'      => '0.22',
        'plugins' => '0.22',
        'themes'  => '0.22',
        );

// Contact Recipients
    global $Contact;
    $Contact = array(
        'General Inquiry' => array(
            #'email' => 'developers@mythtv.org',
            'email' => 'xris@forevermore.net',
            'pre'   => 'MYTHTV -> ',
            'info'  => ''
            ),
        'Corporate Sponsorship' => array(
            'email' => 'xris@forevermore.net',
            'pre'   => 'MYTHTV SPONSOR -> ',
            'info'  => ''
            ),
        'Contract Coding' => array(
            #'email' => 'developers@mythtv.org',
            'email' => 'xris@forevermore.net',
            'pre'   => 'MYTHTV CODE -> ',
            'info'  => ''
            ),
        );

// Default values for Meta variables used to influence header/footer files
    global $Meta;
    $Meta = array(
        'title'       => 'MythTV, Open Source DVR',
        'keywords'    =>
             'MythTV,MythWeb,MythMusic,MythVideo,Convergence,Free,DVR,'
            .'Video Recorder,Digital Video Recorder,VCR,Open Source,GPL,'
            .'Linux,Mac,Mac OS,MacOS,Device',
        'description' => '',
        );

// Digg topics
    global $Digg_Topics;
    $Digg_Topics = array(
        'apple',
        //'arts_culture',
        //'autos',
        //'baseball',
        //'basketball',
        //'business_finance',
        //'celebrity',
        //'comedy',
        //'comics_animation',
        //'design',
        'educational',
        //'environment',
        //'extreme_sports',
        //'food_drink',
        //'football',
        'gadgets',
        //'gaming_news',
        //'general_sciences',
        //'golf',
        'hardware',
        //'health',
        //'hockey',
        'linux_unix',
        'microsoft',
        'mods',
        //'motorsport',
        'movies',
        'music',
        //'nintendo',
        //'odd_stuff',
        //'olympics',
        //'other_sports',
        //'pc_games',
        //'people',
        //'pets_animals',
        //'playable_web_games',
        //'playstation',
        //'political_opinion',
        //'politics',
        'programming',
        //'security',
        //'soccer',
        'software',
        //'space',
        'tech_news',
        'television',
        //'tennis',
        //'travel_places',
        //'world_news',
        'xbox',
        );

