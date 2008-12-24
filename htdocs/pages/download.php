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

// Meta Info
    $Meta['title'] = 'Download MythTV';
    $Meta['description']
        = 'Download MythTV, a free digital video recorder application'
         .' for Linux and MacOS.';
    $Meta['keywords'] = 'Download,'.$Meta['keywords'];

// Load the global page header
    require_once 'tmpl/header.php';

// Otherwise, we need to display the download list and other options
?>

<div id="download">

<div id="download-source" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <p>
        For various reasons, we have chosen not distribute pre-compiled binary
        versions of MythTV.  However, if you would like to compile from source,
        you may download the latest versions here:
        </p>
        <ul>
            <li><a href="/download/mythtv/<?php echo $Version['tv'] ?>">
                MythTV <?php echo $Version['tv'] ?></a>
            <li><a href="/download/plugins/<?php echo $Version['plugins'] ?>">
                MythTV Plugins <?php echo $Version['plugins'] ?></a>
            <li><a href="/download/themes/<?php echo $Version['themes'] ?>">
                MythTV Themes <?php echo $Version['themes'] ?></a>
        </ul>
        <p>
        If you are looking for older versions, you can find them in the
        <a href="ftp://ftp.osuosl.org/pub/mythtv/">OSU OSL archives</a>.
        </p>
    </div>
</div>

<div id="download-other" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <p>
        If you would like to forgo compiling MythTV from source, there are packages
        available for a variety of linux distrubutions.  You can find a
        <a href="http://www.mythtv.org/wiki/index.php/Packages">list of available third
        party packages</a> in the wiki, along with a handful of howtos for getting
        MythTV installed in your favorite distro.
        </p>
        <p>
        In the wiki, you will also find a list of full-blown
        <a href="http://www.mythtv.org/wiki/index.php/External_Links#MythTV_Install_Guides_.2F_Distros">linux distributions</a>
        that come pre-installed with MythTV, along with howtos for getting
        MythTV running on most other major linux distributions (as well as
        FreeBSD).
        </p>
        <p>
        If you would like to grab the latest development version or just want to keep up
        with the latest fixes to the stable branch, you will find subversion checkout
        instructions at <a href="http://svn.mythtv.org/trac/">http://svn.mythtv.org/</a>
        </p>
    </div>
</div>

</div><!-- download -->

<?php
// Load the global page footer
    require_once 'tmpl/footer.php';

