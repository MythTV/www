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
 *
 *
 * @param
 *
 * @return
/**/
    function tv_thumb($img, $tv = 'tv_white', $side = 'l', $size = 'a', $color='none',  $params='') {
    // Size settings
        $sizes = array('l' => array(
                            'a' => array('size'  => '170x100',
                                         'geo1'  => '128x94+8+10',
                                         'shear' => '0x10',
                                         'geo2'  => '177x177-5-4'),
                            'b' => array('size'  => '200x115',
                                         'geo1'  => '150x102+12+18',
                                         'shear' => '0x10',
                                         'geo2'  => '210x210-7-4'),
                            ),
                       'r' => array(
                            'a' => array('size'  => '170x100',
                                         'geo1'  => '128x94+12+10',
                                         'shear' => '0x350',
                                         'geo2'  => '173x173-3-4'),
                            'b' => array('size'  => '200x115',
                                         'geo1'  => '150x102+18+17',
                                         'shear' => '0x350',
                                         'geo2'  => '205x205-4-4'),
                            ),
                      );
        if (!$sizes[$side])
            $side = 'l';
        if (!$sizes[$side][$size])
            $size = 'a';
    // Check for an invalid screenshot filename
        if (strstr($img, '/')) {
            return "<!-- tv_thumb screenshot $img must not contain / characters -->";
        }
    // Make sure the path includes the img directory
        $img = "img/screenshots/$img";
    // Ignore images that don't exist
        if (!file_exists($img)) {
            echo "<!-- tv_thumb screenshot $img does not exist -->";
            return;
        }
    // Build the thumbnail cache path
        $thumb = 'cache/tv_'.preg_replace('/[\/\.]+/', '_', $img)."_{$tv}_{$side}_$size.jpg";
    // Make sure the path includes the img directory
        $tv = "img/tv/{$tv}_$side.png";
    // Ignore images that don't exist
        if (!file_exists($tv)) {
            echo "<!-- tv_thumb TV image $tv does not exist -->";
            return;
        }
    // Create the thumbnail if necessary
        if (!file_exists($thumb) || filemtime($thumb) < filemtime($img)) {
            #$color = ;
            $command = 'convert -quality 60 -size '.escapeshellarg($sizes[$side][$size]['size'])
                      .' '.escapeshellarg("xc:$color")
                      .' -background '.escapeshellarg($color)
                      .' -composite '
                      .' '.escapeshellarg($img)
                      .' -background '.escapeshellarg($color)
                      .' -geometry '.escapeshellarg($sizes[$side][$size]['geo1']).'!'
                      .' -shear '   .escapeshellarg($sizes[$side][$size]['shear'])
                      .' -composite '
                      .escapeshellarg($tv)
                      .' -geometry '.escapeshellarg($sizes[$side][$size]['geo2'])
                      .' -composite '
                      .escapeshellarg($thumb)
                      ;
            #echo $command,'<hr>';return;
            system($command);
        }
    // Get the image info
        list($width, $height) = getimagesize($thumb);
    // Return
        echo '<a href="/', $img, '">',
               '<img src="/', $thumb,  '"',
               ' height="',  $height, '"',
               ' width="',   $width,  '"',
               ' border="0" ', $params, ' /></a>';
    }

/**
 * Create a thumbnail of the requested image, and return an image tag to
 * display it.  Given the TV image size, 252x178 max res
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

