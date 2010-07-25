<?php
    $topic  = 'announcement';
    $title  = 'MythTV 0.23.1 Available';
    $author = 'xris';
    $date   = strtotime('2010-07-25  0:20:08 UTC');
?>
<ul>
    <li>A recent bugfix required that we upgrade the version of the communication protocol
        used between the various MythTV components.  In order to allow users to keep track
        of this change, we are pleased to announce that 0.23.1 has been released, which
        includes the aforemented bug fix along with many others.</li>
    <li>A complete list of changes in both 0.23 and 0.23.1 can be found in the
        <a href="http://www.mythtv.org/wiki/Release_Notes_-_0.23">Release Notes</a> 
        on the wiki.
        </li> 
    <li>You can <a href="/download">download the tarballs</a> now:
        <ul>
            <li><a href="/download/mythtv/<?php echo $Version['tv'] ?>" onclick="pageTracker._trackPageview('/download/mythtv/<?php echo $Version['tv'] ?>');">MythTV</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythtv-0.23.1.md5sum">MD5</a>)
                </li>
            <li><a href="/download/plugins/<?php echo $Version['plugins'] ?>" onclick="pageTracker._trackPageview('/download/plugins/<?php echo $Version['plugins'] ?>');">MythPlugins</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythplugins-0.23.1.md5sum">MD5</a>)
                </li>
            <li><a href="/download/themes/<?php echo $Version['themes'] ?>" onclick="pageTracker._trackPageview('/download/themes/<?php echo $Version['themes'] ?>');">MythThemes</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/myththemes-0.23.1.md5sum">MD5</a>)
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
