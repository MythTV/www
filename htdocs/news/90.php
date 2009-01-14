<?php
    $topic  = 'announcement';
    $title  = 'New Release -- 0.11';
    $author = 'isaac';
    $date   = strtotime('2003-08-15 16:26:08 UTC');
?>
<ul>
  <li>It's time once again for your friendly neighborhood MythTV update.  Changes to the TV portion include:
  <ul>
    <li>New automatic deletion support (keep a certain number of episodes per program, or just free up space globally) to make sure you've got free space to record.
    <li>A new live tv -> recording -> live tv transition contributed by Holger Buchfink, which fixes a number of bugs related to that.  He also sent in a bunch of other bugfixes.
    <li>DVB support is getting closer to 'working well' status, thanks mostly to fixes from Kenneth Aafloy and myself.  Apparently it's useable for recording and (mostly) watching live tv, but there's some setup issues that should get worked out soon.
    <li>This release includes very preliminary support for the (not yet shipping) pcHDTV card.
    <li>The built-in transcoding support (just .nuv to .nuv, really) written by Geoffrey Hausheer finally got enabled.  Basically, this allows you to recompress recorded files down to a smaller size for archival purposes.  Or, just use <a href="http://www.icelus.org">mythmkmovie</a> to transcode them into any other format you want (with some caveats).
    <li>There's some preliminary native lirc (no more irxevent) support contributed by Scott Beck and Anduin Withers.
    <li>Many bugfixes, optimizations (mpeg2 decoding is faster), and other improvements everywhere in MythTV.
  </ul>
  <li>The rest of the plugin modules also saw quite a bit of development:
  <ul>
    <li>Brand new 'MythDVD' module, which allows you to view DVDs using the DVD player software of your choice, as well as a frontend to transcode/libdvdread for extremely easy movie backups which get automatically imported into MythVideo.
    <li>A complete rewrite of MythWeb by Chris Petersen.  While it doesn't quite (yet) match all the features of the old MythWeb, it will soon and is really quite nice =)  The old code is still available in the CVS tree as the 'mythweb' module if people still want to use that.
    <li>MythGame got a much needed user interface overhaul.  It now matches the other UIs in MythTV.
    <li>MythWeather got fixed -- a lot of people were seeing the weather forcast data collection process time out or error out.  Welp, no more of that. =)
  </ul>
  <li>As always, quite a few people contributed to this release.  Thanks everyone!
  <li>As always, grab things from the <a href="/download">download section</a> and read the <a href="/docs">documentation</a>.  Make sure to read the various UPGRADING files if you're upgrading from an earlier release.
  <li>Check the <a href="/download#other-downloads">links section</a> for Debian, Redhat, and Mandrake package updates.  Hopefully they'll all be available soon =)  I can't imagine the official Gentoo ebuild taking that long to update to 0.11 either.
  <li>And just a note to anyone who's wondering -- XMLTV 0.5.16 was released recently to fix a temporary problem with tv_grab_na.  This MythTV release is of course compatible with it, 0.5.15, and 0.5.14, so use whatever you want.
</ul>
