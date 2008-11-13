<?php
    $topic  = 'announcement';
    $title  = 'Whoops.';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2006-09-11 23:04:33 UTC');
?>
<ul>
  <li>Whoops.  A rather nasty little bug got checked in just before I made release last night that prevents mythweb from scheduling recordings.  
  <li>I've updated the link to the new mythplugins download (0.20a) in the <a href="http://www.mythtv.org/modules.php?name=Downloads">download section</a>, if you want to redownload the entire thing again.
  <li>If you've already grabbed the source, <a href="http://www.mythtv.org/mc/fix-mythweb-in-0.20.diff">here's a patch</a> that you can use to update it to the fixed version.  Just copy the diff file to the mythplugins-0.20 directory, and run: patch -p1 < fix-mythweb-in-0.20.diff
  <li>Sorry about that folks.
</ul>
