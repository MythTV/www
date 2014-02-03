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
 *
 * @param string $url  The url to redirect to
 * @param int    $code HTTP response code to send along with the redirect.
/**/
    function redirect_browser($url, $code=301) {
        if ($code) {
            switch ($code) {
                case 301:   header('HTTP/1.0 301 Moved Permanently');   break;
                case 302:   header('HTTP/1.0 302 Found');               break;
                case 404:   header('HTTP/1.0 404 Not Found');           break;
                default:    header("HTTP/1.0 $code");
            }
        }
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
 * Print a TV thumbnail image
 *
 * @param string $img
 * @param string $tv
 * @param string $side
 * @param string $size
 * @param string $color
 * @param string $params
 * @param string $href
/**/
    function tv_thumb($img, $tv = 'tv_white', $side = 'l', $size = 'a', $color='none',  $params='', $href='') {
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
        $clean_color = preg_replace('/\W+/', '', $color);
        $thumb = 'cache/tv_'.preg_replace('/[\/\.]+/', '_', $img)."_{$tv}_{$side}_{$size}_$clean_color.jpg";
    // Make sure the path includes the img directory
        $tv = "img/tv/{$tv}_$side.png";
    // Ignore images that don't exist
        if (!file_exists($tv)) {
            echo "<!-- tv_thumb TV image $tv does not exist -->";
            return;
        }
    // Create the thumbnail if necessary
        if (!file_exists($thumb) || filemtime($thumb) < filemtime($img)) {
            $command = 'convert -quality 60 -size '.escapeshellarg($sizes[$side][$size]['size'])
                      .' '.escapeshellarg("xc:$color")
                      .' -background '.escapeshellarg($color)
                      .' '.escapeshellarg($img)
                      .' -background '.escapeshellarg($color)
                      .' -geometry '.escapeshellarg($sizes[$side][$size]['geo1']).'!'
                      .' -shear '   .escapeshellarg($sizes[$side][$size]['shear'])
                      .' -composite '
                      .escapeshellarg($tv)
                      .' -geometry '.escapeshellarg($sizes[$side][$size]['geo2'])
                      .' -composite '
                      .escapeshellarg($thumb)
                      .' '
                      .escapeshellarg($thumb)
                      ;
            #echo '<hr>',html_entities($command),'<hr>';
            system($command);
        }
    // Get the image info
        list($width, $height) = getimagesize($thumb);
    // HTML Validation
        if (!preg_match('/alt=/', $params)) {
            $params = trim($params.' alt=""');
        }
    // Return
        echo '<a href="', _or($href, '/'.$img), '">',
               '<img src="', $thumb, '"',
               ' height="',   $height, '"',
               ' width="',    $width,  '"',
               ' border="0" ', $params, ' ></a>';
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
               " $params ></a>";
    }

/**
 * Studies have shown that email addresses encoded into html hex entities are
 * virtually ignored by harvesting robots.  If you absolutely must put an email
 * address into a web page, this will make it look perfectly normal to your
 * users, but will cut down significantly on the number of harvesters finding
 * it.
 *
 * Set $obfuscate to true if you want to add another layer of obfuscation to
 * the encode:  user(a)example*com.  This will of course require users to
 * manually fix the address so that it is usable.
 *
 * @param string $email     the address to be encoded
 * @param string $title     the content of the hyperlink (eg. click here to email me)
 * @param bool   $obfuscate turn on secondary obfuscation [see above]
 *
 * @return string anti-spammer hex-encoded <a href="mailto:$email">$title</a>
/**/
    function encoded_mailto($email, $title=NULL, $obfuscate=false) {
    // Pull off any query string
        if (preg_match('/^(.+?)(\?.*)$/', $email, $match)) {
            $email = $match[1];
            $query = $match[2];
        }
        else
            $query = '';
    // Do some fun obfuscation to the email address
        if ($obfuscate) {
            $email = str_replace('.', '*',
                     str_replace('@', '(a)', $email)
                     );
        }
    // Default title is the email address
        if (empty($title))
            $title = $email;
    // hex-encode the mailto link
        return '<a href="'
               # Safari doesn't allow the "mailto:" to be encoded, too
               #.'&#x00'.rtrim(chunk_split(bin2hex('mailto:'), 2, ';&#x00'), '&#x00')
               .'mailto:'
               .'%'.rtrim(chunk_split(bin2hex($email), 2, '%'), '%')
               .$query
               .'">'
               .'&#x00'.rtrim(chunk_split(bin2hex($title), 2, ';&#x00'), '&#x00')
               .'</a>';

    }

/**
 * Prints out a piece of data to the firebug console.
/**/
    function debug($data, $file = false) {
    // Put our data into a string
        if (is_array($data) || is_object($data))
            $str = print_r($data, TRUE);
        elseif (isset($data))
            $str = $data;
        $search = array("\n", '"');
        $replace = array("\\n", '\"');
        $back_trace = debug_backtrace();
    // If this is a string, int or float
        if (is_string($str) || is_int($str) || is_float($str)) {
        // Allow XML/HTML to be treated as normal text
            $str = htmlspecialchars($str, ENT_NOQUOTES);
        }
    // If this is a boolean
        elseif (is_bool($str))
            $str = $str ? '<i>**TRUE**</i>' : '<i>**FALSE**</i>';
    // If this is null
        elseif (is_null($str))
            $str = '<i>**NULL**</i>';
    // If it is not a string, we return a get_type, because it would be hard to generically come up with a way
    // to display anything
        else
            $str = '<i>Type : '.gettype($str).'</i>';
    // Show which line caused the debug message
        $str = $str."\n<hr>\n".'Line #'.$back_trace[0]['line'].' in file '.$back_trace[0]['file']."\n";
    // Print the message
        echo '<pre>'.$str.'</pre>';
    // Print to a file?
        if ($file) {
            $out = fopen('/tmp/debug.txt', 'a');
            fwrite($out, "$str\n");
            fclose($out);
        }
    }
