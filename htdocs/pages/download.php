<?php
/**
 * Download tracker page for mythtv.org
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

// Requested a specific file?
    if ($Path[1]) {
        if (!$Path[2])
            $Path[2] = $Version;
        switch (str_replace('myth', '', strtolower($Path[1]))) {
            case 'tv':
                redirect_browser('ftp://ftp.osuosl.org/pub/mythtv/mythtv-'.$Path[2].'.tar.bz2');
            case 'plugins':
                redirect_browser('ftp://ftp.osuosl.org/pub/mythtv/mythplugins-'.$Path[2].'.tar.bz2');
            case 'themes':
                redirect_browser('ftp://ftp.osuosl.org/pub/mythtv/myththemes-'.$Path[2].'.tar.bz2');
        }
    }

// Which section are we in?
    $Nav = 'download';

// Load the global page header
    require_once 'pages/header.php';

// Otherwise, we need to display the download list and other options
?>
<p>
If you want to compile from source, you may download the latest versions here:
</p>
<ul>
    <li>MythTV:     <a href="/download/mythtv/<?php  echo $Version['tv']      ?>">source</a>
    <li>Plugins:    <a href="/download/plugins/<?php echo $Version['plugins'] ?>">source</a>
    <li>Themes:     <a href="/download/themes/<?php  echo $Version['themes']  ?>">source</a>
</ul>

<p>
If you are looking for older versions, you can find them in the
<a href="ftp://ftp.osuosl.org/pub/mythtv/">OSU OSL archives</a>.
</p>

<p>
If you would like to forgo compiling MythTV from source, there are packages
available for a variety of linux distrubutions.  You can find a
<a href="http://www.mythtv.org/wiki/index.php/Packages">list of available third
party packages</a> in the wiki, along with a handful of howto's for getting
MythTV installed in your favorite distro.
</p>

<p>
If you would like to grab the latest development version or just want to keep up
with the latest fixes to the stable branch, you will find subversion checkout
instructions at <a href="http://svn.mythtv.org/trac/">http://svn.mythtv.org/</a>
</p>

<?php
// Load the global page footer
    require_once 'pages/footer.php';

