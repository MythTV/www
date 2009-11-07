<?php
    $topic  = 'announcement';
    $title  = 'MythTV 0.22 Available';
    $author = 'danielk';
    $date   = strtotime('2009-11-06 16:17:00 UTC');

    global $Version;
?>
<ul>
    <li>After a little over a year and a half in the making, the developers of
        MythTV are happy to announce that MythTV 0.22 is now available. There
        have been a lot of large changes since 0.21, including a port from
        Qt v3 to Qt v4 and a major UI rewrite to convert to MythTV's new
        MythUI user interface libary.
        </li>
    <li>As always, this release adds support for some new hardware, in this case
        VDPAU video acceleration, DVB-S2, and the Hauppauge HD-PVR.
        The MythUI toolkit allows themes much greater control over the user
        interface and today we're announcing a <a href="/theming-competition">competition</a>
        to design new themes for MythTV.
        </li>
    <li>For a more complete list of changes and new features, read the
        <a href="http://www.mythtv.org/wiki/Release_Notes_-_0.22">Release Notes</a>
        on the wiki.
        </li>
    <li>You can <a href="ftp://ftp.osuosl.org/pub/mythtv/">download the tarballs</a> now:
        <ul>
            <li><a href="/download/mythtv/<?php echo $Version['tv'] ?>" onclick="pageTracker._trackPageview('/download/mythtv/<?php echo $Version['tv'] ?>');">MythTV</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythtv-0.22.md5sum">MD5</a>)
                </li>
            <li><a href="/download/plugins/<?php echo $Version['plugins'] ?>" onclick="pageTracker._trackPageview('/download/plugins/<?php echo $Version['plugins'] ?>');">MythPlugins</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythplugins-0.22.md5sum">MD5</a>)
                </li>
            <li><a href="/download/themes/<?php echo $Version['themes'] ?>" onclick="pageTracker._trackPageview('/download/themes/<?php echo $Version['themes'] ?>');">MythThemes</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/myththemes-0.22.md5sum">MD5</a>)
                </li>
        </ul></li>
    <li>Tarballs of all MythTV releases, past and present, are available
        <a href="ftp://ftp.osuosl.org/pub/mythtv/">on the FTP server</a>.
        </li>
    <li>If you prefer a pre-packaged version, you may want to check out the
        <a href="http://www.mythtv.org/wiki/Packages">wiki packages page</a>
        to see if your favorite distribution has binaries available for
        installation or download.</li>
</ul>
