<?php
    $topic  = 'news';
    $title  = '0.13 Release Followup';
    $author = 'isaac';
    $date   = strtotime('2003-12-13 22:39:39 UTC');
?>
<ul>
  <li>Looks like one minor bug in the 0.13 release so far:  On some machines (not all), the automatic database upgrade failed to insert the defaults for one of the new columns that was added.  This causes recordings to be in PAL format for analog bttv cards -- bad colors, large portions of the screen green, etc.  If this is affecting you, you've got a couple ways to fix it:
  <ul>
    <li>Execute the following command against your database (using something like phpmyadmin or the standard mysql command line client:<br><pre>UPDATE channel SET tvformat = 'Default' WHERE tvformat = '';</pre>
    <li>Apply <a href="http://www.mythtv.org/mc/tvformat.fix.0.13.diff">this patch</a> to your source tree.  Copy the file into your mythtv-0.13 directory and apply it with the following command and rebuild afterwards: <pre>patch -p0 < tvformat.fix.0.13.diff</pre>
    <li>Update to use CVS instead of the 0.13 release.
  </ul>
  <li>Sorry about that, but there's always something wrong in a release =)  That's why there's always another one.  I'll try to get 0.14 out relatively soonish, though that could mean a month from now.
  <li>The Debian unstable packages have been updated to 0.13 after a long hiatus.  Looks like the Mandrake 9.2 packages are up, the Redhat RPMs are almost ready for general consumption, and I think the Gentoo ebuilds are updated as well, though they may currently be masked unstable or whatnot.
  <li>One other note -- themes need to be updated to work with 0.13.  The ones on the website here aren't fully compatible, but I hope to get an updated themes section online in the next few days with some newer themes.  If you're having problems, just use Blue for now.
</ul>
