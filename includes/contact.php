<?php
/**
 * Routines used by pages/contact.php, to keep as much code out of the display
 * file as possible
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @copyright   MythTV
 *
 * @package     mythtv.org
/**/

/**
 * @global  bool    $GLOBALS['Contact_Success']
 * @name    $Contact_Success
/**/
    global $Contact_Success;
    $Contact_Success = false;

/**
 * @global  array   $GLOBALS['Contact_Err']
 * @name    $Contact_Err
/**/
    global $Contact_Err;
    $Contact_Err = array();


// Dev check
    #if ($_SERVER['HTTP_HOST'] != 'www.mythtv.org') {
    #    $Contact_Err['subject'] = "Testing.  Emails will not be sent!";
    #}

// Load some utilities
    require_once 'includes/EmailVerify.php';

// Did someone click the send button?
    if ($_POST['realsend']) {
        global $Contact;
    // Verify the email address
        if (!preg_match('/\w/', $_POST['email'])) {
            $Contact_Err['email'] = 'Please enter your email address.';
        }
        elseif (!EmailVerify::verify($_POST['email'], true, true, true)) {
            $Contact_Err['email'] = 'Please enter a valid email address.';
        }
    // Verify the text fields
        if (strlen($_POST['name']) < 4 or !preg_match('/\w/', $_POST['name'])) {
            $Contact_Err['name'] = 'Please include your name.';
        }
        elseif (preg_match('/[<>"\r\n\t]/', $_POST['name'])) {
            $Contact_Err['name'] = 'The name you submitted contains unsupported characters.';
        }
        if (strlen($_POST['subject']) < 3 || !preg_match('/\w/', $_POST['subject'])) {
            $Contact_Err['subject'] = 'Please give this message a subject.';
        }
        elseif (preg_match('/[\r\n\t]/', $_POST['subject'])) {
            $Contact_Err['subject'] = 'The subject you submitted contains unsupported characters.';
        }
        if (strlen($_POST['text']) < 25 || !preg_match('/\w/', $_POST['text'])) {
            $Contact_Err['text'] = 'You might want to try typing a more substantial message.';
        }
    // Make sure that a valid reason was given
        if (empty($Contact[$_POST['reason']])) {
            $Contact_Err['reason'] = 'Please select a valid reason for this contact request.';
        }
    // No errors - send the message
        if (empty($Contact_Err)) {
        // Start the headers list
            $headers = array('From: "'.$_POST['name'].'" <'.$_POST['email'],
                             'X-Remote-IP: '.$_SERVER['REMOTE_ADDR'],
                             'X-User-Agent: '.$_SERVER['HTTP_USER_AGENT']);
        // Get a list of extra POST variables
            foreach ($_POST as $var => $val) {
                if (in_array($var, array('email', 'name', 'subject', 'text', 'realsend', 'reason')))
                    continue;
                $var = preg_replace('/\W+/', '-', $var);
                if (strlen($val) > 50) {
                    $val = substr($val, 0, 50).'... (length: '.strlen($val).')';
                }
                $headers[] = "X-POST-$var: $val";
            }
        // Send the email
            $result = mail($Contact[$_POST['reason']]['email'],
                            $Contact[$_POST['reason']]['pre'].$_POST['subject'],
                            $_POST['text'],
                            implode("\n", $headers)
                          );
            if ($result) {
                $Contact_Success = true;
                $_POST['subject'] = '';
                $_POST['text']    = '';
            }
            else
                $Contact_Err['misc'] = 'Mail could not be sent:  unknown error.';
        }
    }

