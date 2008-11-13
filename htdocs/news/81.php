<?php
    $topic  = 'announcement';
    $title  = 'Bugfix Release 0.9.1';
    $author = '<a href="http://www.mythtv.org/">Isaac</a>';
    $date   = strtotime('2003-06-11 12:31:51 UTC');
?>
<ul>
  <li>Turned out that 0.9 had a small bug in it that would cause the right channel of audio to be muted after a channel change if you were using the internal volume controls.  I've put together a 0.9.1 release to fix this.  If you're already using 0.9, you've got 4 options:
    <ul>
      <li>Just turn off the internal volume controls from the Setup->General menu.
      <li>Grab <a href="http://www.mythtv.org/mc/mythtv-0.9-to-0.9.1.diff.gz">this patch</a> and apply it like: "patch -p1 < mythtv-0.9-to-0.9.1.diff" from the 0.9 source directory of the release.
      <li>Update to the 0.9.1 release.
      <li>Update to current CVS.
    </ul>
  <li>Sorry for the inconvenience.  I don't use the internal volume controls (I prefer to have all that controlled through my AV receiver), so I didn't catch this before the release.
  <li>There's also an extremely minor update for MythWeb available from the download page (patch to update the 0.9 release is also available <a href="http://www.mythtv.org/mc/mythweb-0.9-to-0.9.1.diff.gz">here</a>.).  This fixes a simple little bug that will only show up if you've never used the scheduling functionality in MythTV itself, and have only selected programs to be recorded from MythWeb.
  <li>Finally, yes, the website was down for a whole 24 hours.  No big deal.
</ul>
