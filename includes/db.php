<?php
/**
 * Database connection routines.  For simplicity, this is only sqlite for now.
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
 * @global  object  $db
 * @name    $db
/**/
    global $db;
    $db = new PDO('sqlite:'.$_SERVER['db_file']);
    #if ($db->errorCode()) {
    #    echo "db error:  ";
    #    print_r($db->errorInfo());
    #}

/**
 * Log a download attempt
 *
 * @param string $module  Module name
 * @param string $version Version string
/**/
    function log_download($module, $version) {
        global $db;
        $params = array(
            intVal(time() / (60*60*24)),    // Round to the nearest day
            $module,
            $version
            );
        $sh = $db->prepare('
            UPDATE  downloads
            SET     count=count+1
            WHERE   date    = ?
                AND module  = ?
                AND version = ?
            ');
        $sh->execute($params);
        if ($sh->rowCount() != 1) {
            $sh = $db->prepare('
                INSERT INTO downloads
                        (count,date,module,version)
                VALUES  (1,?,?,?)
                ');
            $sh->execute($params);
            #if ($sh->rowCount() != 1) {
            #    echo "\n\nerror!";
            #    print_r($sh->errorInfo());
            #    exit;
            #}
        }
    }
