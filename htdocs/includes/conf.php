<?php
/**
 * Config for mythtv.org
/**/

// Edit mode enabled?
    $Edit = true;

// The following IP's are allowed to edit:
    $Allowed_IP = array('10.0.0.13');

// Current version of MythTV
    $Version['tv']      = '0.20.2';
    $Version['plugins'] = '0.20.2';
    $Version['themes']  = '0.20.2';

// Contact Recipients
    $Contact = array(
                     'General Inquiry' => array(
                            'email' => 'developers@mythtv.org',
                            'pre'   => 'MYTHTV',
                            'info'  => ''
                           ),
                     'Corporate Sponsorship' => array(
                            'email' => 'xris@forevermore.net',
                            'pre'   => 'MYTHTV SPONSOR',
                            'info'  => ''
                           ),
                     'Contract Coding' => array(
                            'email' => 'developers@mythtv.org',
                            'pre'   => 'MYTHTV CODE',
                            'info'  => ''
                           ),
                    );

