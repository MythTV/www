<?php
/**
 * Random small utility functions.
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
 * Print a redirect header and exit
/**/
    function redirect_browser($url) {
        header("Location: $url");
        echo "\n";
        exit;
    }

/**
 * Overloaded version of htmlentities() that requests the UTF-8 entities rather
 * than the default ISO-9660
 *
 * @param string $str   String to convert to html entities
 *
 * @return UTF-8 entities for $str
/**/
    function html_entities($str) {
        return htmlentities($str, ENT_COMPAT, 'UTF-8');
    }

/**
 * Returns a sorted list of files in a directory, minus . and ..
/**/
    function get_sorted_files($dir = '.', $regex = '', $negate = false) {
        $list = array();
        $handle = opendir($dir);
        while(false != ($file = readdir($handle))) {
            if ($file == '.' || $file == '..') continue;
            if (!$regex || (!$negate && preg_match($regex, $file)) || ($negate && !preg_match($regex, $file)))
                $list[] = $file;
        }
        closedir($handle);
        natcasesort($list);
        return $list;
    }

/**
 * returns $this or $or_this
 * if $gt is set to true, $this will only be returned if it's > 0
 * if $gt is set to a number, $this will only be returned if it's > $gt
/**/
    function _or($this, $or_this, $gt = false) {
        if ($gt === true)
            return $this > 0 ? $this : $or_this;
        if (!empty($gt))
            return $this > $gt ? $this : $or_this;
        return $this ? $this : $or_this;
    }

/**
 * Create a thumbnail of the requested image, and return an image tag to
 * display it.
 *
 * @param string $img
 * @param int    $width
 * @param int    $height
 * @param string $params
 *
 * @return string
/**/
    function thumbnail($img, $width, $height=null, $params='') {
    // Cleanup
        if (empty($height))
            $height = $width;
        $width  = intVal($width);
        $height = intVal($height);
    // Make sure the path includes the img directory
        $img = preg_replace('/^(?:\/?img\/)?/', 'img/', $img);
    // Ignore images that don't exist
        if (!file_exists($img)) {
            return "<!-- image $img does not exist -->";
        }
    // Build the thumbnail cache path
        $thumb = 'cache/'.preg_replace('/\/+/', '_', $img)."_{$width}x$height.jpg";
    // Create the thumbnail if necessary
        if (!file_exists($thumb) || filemtime($thumb) < filemtime($img)) {
            system("convert -quality 75 -geometry {$width}x$height ".escapeshellarg($img).' '.escapeshellarg($thumb));
        }
    // Get the image info
        list($width, $height) = getimagesize($thumb);
    // Return
        echo '<a href="/', $img, '">',
               '<img src="/', $thumb,  '"',
               ' height="',  $height, '"',
               ' width="',   $width,  '"',
               " $params /></a>";
    }
