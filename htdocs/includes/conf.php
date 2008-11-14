<?php
/**
 * Config for mythtv.org
/**/

// Edit mode enabled?
    global $Edit;
    $Edit = true;

// The following IP's are allowed to edit:
    global $Allowed_IP;
    $Allowed_IP = array('10.0.0.13');

// Current version of MythTV
    global $Version;
    $Version = array(
        'tv'      => '0.21',
        'plugins' => '0.21',
        'themes'  => '0.21',
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

