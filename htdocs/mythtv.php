<?php
/**
 * Index page for mythtv.org
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @copyright   mythtv.org
 *
 * @package     mythtv.org
 *
/**/

/**
 * $Path is an array of PATH_INFO passed into the script via mod_rewrite or some
 * other lesser means.  It contains most of the information required for
 * figuring out what functions the user wants to access.
 *
 * @global  array   $GLOBALS['Path']
 * @name    $Path
/**/
    global $Path;
    $Path = explode('/', preg_replace('/^\/+/',    '',   // Remove leading slashes
                         preg_replace('/[\s]+/',   ' ',  // Convert extra whitespace
                        // Grab the path info from various different places.
                             array_key_exists('PATH_INFO', $_SERVER)
                             && $_SERVER['PATH_INFO']
                                ? $_SERVER['PATH_INFO']
                                : (array_key_exists('PATH_INFO', $_ENV)
                                   && $_ENV['PATH_INFO']
                                    ? $_ENV['PATH_INFO']
                                    : $_GET['PATH_INFO']
                                  )
                         ))
                   );

// Load some utility functions, etc
    require_once 'includes/conf.php';
    require_once 'includes/utils.php';

// Don't allow path sections that start with a .
    foreach ($Path as $dir) {
        if (preg_match('/^\\./', $dir)) {
            redirect_browser('/', 404);
        }
    }

// Edit allowed?
    $Edit = ($Edit === true && in_array($_SERVER['REMOTE_ADDR'], $Allowed_IP))
            ? true
            : false;

/**
 * $Nav dictates how the header file highlights the current navigation section.
 *
 * @global  string  $GLOBALS['Nav']
 * @name    $Nav
/**/
    global $Nav;
    $Nav = 'about';

/* ****************************************************************************/

// debug mode
    error_reporting(E_ALL);

// Print the requested page
    if (preg_match('/\w/', $Path[0]))
        if (file_exists('pages/'.$Path[0].'.php'))
            require_once 'pages/'.$Path[0].'.php';
        else
            redirect_browser('/');
    else
        require_once 'pages/index.php';

