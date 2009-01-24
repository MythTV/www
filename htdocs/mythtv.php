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

// We always want to look one level up from the document root
    ini_set('include_path', ini_get('include_path').':'.dirname($_SERVER['DOCUMENT_ROOT']));

// Code root
    define('root', dirname($_SERVER['DOCUMENT_ROOT']));

// SVN revision:  publish.pl replaces this with the current svn revision.
    define('svn_rev', time());

// Hide errors from the live server, show ALL on dev machines.
    if ($_SERVER['HTTP_HOST'] == 'www.mythtv.org') {
        error_reporting(E_NONE);
    }
    else {
        error_reporting(E_ALL);
    }

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
                             (array_key_exists('PATH_INFO', $_SERVER)
                              && $_SERVER['PATH_INFO'])
                                ? $_SERVER['PATH_INFO']
                                : ((array_key_exists('PATH_INFO', $_ENV)
                                    && $_ENV['PATH_INFO'])
                                    ? $_ENV['PATH_INFO']
                                    : (array_key_exists('PATH_INFO', $_GET)
                                       ? $_GET['PATH_INFO']
                                       : null
                                      )
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

/**
 * $Nav dictates how the header file highlights the current navigation section.
 *
 * @global  string  $GLOBALS['Nav']
 * @name    $Nav
/**/
    global $Nav;
    $Nav = 'about';

/* ****************************************************************************/

// People shouldn't be hitting the php files directly
    if ($_SERVER['REQUEST_URI'] == '/mythtv.php') {
        redirect_browser('/');
    }

// Print the requested page
    if (preg_match('/\w/', $Path[0]))
        if (file_exists(root.'/pages/'.$Path[0].'.php'))
            require_once 'pages/'.$Path[0].'.php';
        else
            redirect_browser('/');
    else
        require_once 'pages/index.php';

