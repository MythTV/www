<?php
    $topic  = 'accouncement';
    $title  = 'MythTV 0.23 Available';
    $author = 'robertm';
    $date   = strtotime('2010-05-10  0:12:07 UTC');

    global $Version;
?>
<ul>
    <li>After six months of our new accelerated development schedule,
        MythTV 0.23 is now available.  MythTV 0.23 brings a new event system,
        brand new python bindings, the beta MythNetvision internet video
        plugin, new audio code and surround sound upmixer, several new themes
        (Arclight and Childish), newly resynced ffmpeg libraries, and fixes
        for analog scanning, among many others.
        </li>
    <li>Work towards MythTV 0.24 is in full swing, and has be progressing very well
        for the last several months. If all goes according to plan, MythTV 0.24
        will bring a new MythUI OSD, a nearly rewritten audio subsystem capable
        of handling 24 and 32 bit audio as well as up to 8 channels of output,
        Blu-ray disc and disc structure playback, and various other performance,
        usability, and flexibility improvements.
        </li>
    <li>For a more complete list of changes and new features, read the
        <a href="http://www.mythtv.org/wiki/Release_Notes_-_0.23">Release Notes</a>
        on the wiki.
        </li>
    <li>You can <a href="/download">download the tarballs</a> now:
        <ul>
            <li><a href="/download/mythtv/<?php echo $Version['tv'] ?>" onclick="pageTracker._trackPageview('/download/mythtv/<?php echo $Version['tv'] ?>');">MythTV</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythtv-0.23.md5sum">MD5</a>)
                </li>
            <li><a href="/download/plugins/<?php echo $Version['plugins'] ?>" onclick="pageTracker._trackPageview('/download/plugins/<?php echo $Version['plugins'] ?>');">MythPlugins</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/mythplugins-0.23.md5sum">MD5</a>)
                </li>
            <li><a href="/download/themes/<?php echo $Version['themes'] ?>" onclick="pageTracker._trackPageview('/download/themes/<?php echo $Version['themes'] ?>');">MythThemes</a>
                (<a href="http://svn.mythtv.org/svn/trunk/checksums/myththemes-0.23.md5sum">MD5</a>)
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

