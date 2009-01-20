<?php
    $topic  = 'software_news';
    $title  = 'Current CVS news..';
    $author = 'ijr';
    $date   = strtotime('2003-06-18 00:37:09 UTC');
?>
<ul>
  <li>Lotta changes under the hood recently, but nothing earth-shattering:
  <li>The last of the text config files are now gone (well, aside from mysql.txt, but that one can't quite go away).  Every single option is now configured through the UI.
  <li>Dennis Lou's been submitting some nice improvements to MythGallery -- he did the graphical config for it, thumbnail caching, and some support for importing external sources (like a camera automounting onto a directory somewhere).
  <li>Say goodbye to window-manager induced focus problems -- I've modified everything to display in a single top-level window, instead of creating new full-screen windows for different dialogs.  Along with this, I've modified all the add-on modules (MythMusic, MythWeather, etc) to be true plugins, instead of mostly separate programs.  Side effect of all this is that I added an option to run in a real window with a border, so all you silly people who complained about it being in full-screen mode all the time can just find something else to complain about. =)
</ul>
