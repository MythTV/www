<?php
    $topic  = 'announcement';
    $title  = 'MythTV is Moving to Github!';
    $author = 'xris';
    $date   = strtotime('2010-12-02  18:00:00 UTC');
?>
<ul>
    <li>The MythTV developers decided to retire our subversion repository and
        move our source control to <a href="https://github.com/MythTV">github</a>.
        </li>
    <li>We will keep the existing subversion repository around for archival
        purposes, but it will no longer receive updates.
        </li>
    <li>We will continue to trac bugs in <a href="https://code.mythtv.org/">Trac</a>
        (though we are considering other options for the future).</li>
    <li>This will only affect those of you who compile MythTV from source via
        our subversion repository &mdash; the rest shouldn't notice anything from
        this change.</li>
    <li>Here are a few resources for those interested in continuing to follow
        bleeding edge development, but are unfamiliar with git:
        <ul>
            <li><a href="https://git.wiki.kernel.org/index.php/GitSvnCrashCourse">SVN to Git Crash Course</a></li>
            <li><a href="http://help.github.com/">Github Help</a></li>
            <li><a href="http://book.git-scm.com">The Git Community Book</a></li>
            <li><a href="http://progit.org/book/">Pro Git</a></li>
        </ul>
        </li>
    <li>To help organize things better for their maintainers,
        <a href="https://github.com/MythTV/themes">Themes</a>,
        <a href="https://github.com/MythTV/mythweb">MythWeb</a>, and
        <a href="https://github.com/MythTV/nuvexport">nuvexport</a> have been
        split out of the main repository.  We realize that this may be an
        inconvenience for some people (especially packagers), but after a rather
        lively discussion we decided that this is the best option for future
        development and maintenance.
        </li>
    <li><b>Additionally:</b>  Over the next few weeks we will slowly be
        migrating all of our core services both to and back from a temporary
        host so that we can rebuild our server environment from scratch.  We
        appreciate your understanding of any downtime that might occur from
        this migration, and thank <a href="http://schedulesdirect.org/">Schedules Direct</a>
        for providing the temporary home.</li>
</ul>
