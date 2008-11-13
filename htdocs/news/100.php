<?php
    $topic  = 'software_news';
    $title  = 'New Look for MythNews/MythGallery';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2004-01-14 22:03:44 UTC');
?>
<ul>
  <li>Figured I'd summarize some of the more user-noticeable changes in CVS recently:
  <ul>
    <li>Renchi Raju's essentially rewritten the MythNews and MythGallery plugins -- check out the <a href="http://www.mythtv.org/modules.php?name=MythFeatures">features section</a> for some updated images.  Not pictured are the rather neat slideshow transitions he's added (and is still adding).  Some are opengl based, some not.  Very slick.
    <li>Thanks to Kevin at the ivtv project for finally getting some needed updates into the ivtv driver, David Engel was able to commit a big patch he'd been working on to enhance the support for the hardware decoder / TV-out on the PVR-350.  Makes things faster and stabler, pretty much, and enables edit mode and smooth slowmotion/fast forwarding.  These changes require version 0.1.9 of the ivtv driver.
  </ul>
  <li>.. and a ton of other stuff's changed as well.  I'm too lazy to go through and list everything, so check out the <a href="http://www.mythtv.org/pipermail/mythtv-commits/">mythtv-commits mailing list archive</a> if you're dying to know.
</ul>
