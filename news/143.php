<?php
    $topic  = 'announcement';
    $title  = 'MythTV 0.24 Available';
    $author = 'robertm';
    $date   = strtotime('2010-11-10  17:46:07 UTC');

    global $Version;
?>
<ul>
    <li>When we released MythTV version 0.23 in May, we promised you a number
        of exciting new features and improvements.  Today, we deliver.  MythTV
        version 0.24 is now available for download, and it includes the brand
        new OSD, all-new HD audio support, Blu-ray support, and countless other
        features and fixes.
        </li>
    <li>A list of general goals for the 0.25 release is still being finalized,
        but you can rest assured that when released, MythTV 0.25 will bring with
        it the host of new features, bugfixes, and stability improvements that users
        have come to expect in MythTV releases.  We continue to be committed to
        improving MythTV's user experience, and hope to drastically lower some
        of the existing barriers to entry with MythTV in our next release.
        </li>
    <li>For a more complete list of changes and new features, read the
        <a href="http://www.mythtv.org/wiki/Release_Notes_-_0.24">Release Notes</a>
        (very graciously managed by Matt Saner this release, and the extra attention shows)
        on the wiki.
        </li>
    <li>You can <a href="/download">download the tarballs</a> now:
        <ul>
            <li><a href="/download/mythtv/<?php echo $Version['tv'] ?>" onclick="pageTracker._trackPageview('/download/mythtv/<?php echo $Version['tv'] ?>');">MythTV</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythtv-0.24.md5sum">MD5</a>)
                </li>
            <li><a href="/download/plugins/<?php echo $Version['plugins'] ?>" onclick="pageTracker._trackPageview('/download/plugins/<?php echo $Version['plugins'] ?>');">MythPlugins</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythplugins-0.24.md5sum">MD5</a>)
                </li>
            <li><a href="/download/themes/<?php echo $Version['themes'] ?>" onclick="pageTracker._trackPageview('/download/themes/<?php echo $Version['themes'] ?>');">MythThemes</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/myththemes-0.24.md5sum">MD5</a>)
                </li>
        </ul></li>
    <li>Tarballs of all MythTV releases, past and present, are available
        <a href="ftp://ftp.osuosl.org/pub/mythtv/">on the FTP server</a>,
        or you can check the code out from <a href="http://svn.mythtv.org/">subversion</a>.
        </li>
    <li>If you prefer a pre-packaged version, you may want to check out the
        <a href="http://www.mythtv.org/wiki/Packages">wiki packages page</a>
        to see if your favorite distribution has binaries available for
        installation or download.</li>
</ul>

