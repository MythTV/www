<?php
    $topic  = 'news';
    $title  = 'July 16, 2002';
    $author = 'isaac';
    $date   = strtotime('2002-07-16 21:12:50 UTC');
?>
<ul>
 <li>Also fixed a few bugs today/last night -- transitioning from livetv mode to recording and back should work now, a bug that could cause a crash immediately after deleting something (the Qt docs don't mention that you can't delete items from a list in the spacePressed() handler for that list, as I found out.  You can from the returnPressed() handler), and some weirdness in the manual conflict resolution.
 <li>Totally reorganized the directory layout, and spiffied up the build process.  This removed libmysqlclient as a direct requirement of the build, since I'm now using the built-in Qt mysql stuff everywhere.  The build process is also much cleaner and nicer, and there's no more futzing around in subdirs making things.
<li>I added preliminary code to support using the alternate inputs on TV tuner cards for recording and stuff.  Someone else will have to finish it, though.  Can't really test it.  It shouldn't be all that hard to finish, just a few minor things, mostly involving distinguishing between two different sets of xmltv data.  So, if you want to use MythTV with a satellite box, or other settop box, plugged into your SVideo or Composite plug on the TV card, email me, and/or join the mailing list, and I'll let you know what needs done.
</ul>
