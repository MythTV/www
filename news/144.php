<?php
    $topic  = 'announcement';
    $title  = 'XvMC and libmpeg2 to be dropped in 0.25';
    $author = 'stuartm';
    $date   = strtotime('2010-12-02 17:07:40 UTC');
?>

<ul>
    <li>We'd like to warn users that we are planning to drop XvMC and libmpeg2 decoding support from forthcoming releases of MythTV. 0.25 will be the first release without these features and so you still have several months to upgrade hardware if you wish to continue running the latest MythTV releases. Of course the newly released 0.24 will remain available if either XvMC or libmpeg2 are important to you.</li>
    <li>Why are we doing this?
        <ul>
	    <li>XvMC - The primary reason is XvMC code is very hard to maintain, it requires a lot special handling and does not support the features which many of our other video rendering methods provide. Far superior alternative hardware decoders such as Nvidia's PureVideo are now supported; Crystal HD, ATI and Intel support are on the MythTV roadmap.</li>
            <li>libmpeg2 - A high proportion of problems reported to us can be traced back to libmpeg2, we want MythTV to be as stable as possible and the advantages of libmpeg2 are outweighed by the negatives. Like XvMC it complicates the code in ways that make it harder to maintain.</li>
            <li>Both - Additionally the need for both features is largely gone, even the lowest cost CPUs which have been available in the last few years can easily manage to playback Standard and High-Definition mpeg2. Low power CPUs such Intel's atom are usually supplied with Nvidia's ION platform or can be used with discrete hardware decoding solutions such as Crystal HD.</li>
	</ul>
    <li>We believe that leaving these features behind will allow us to focus our time more productively, making the improvements and adding the features that a majority of users want to see.</li>
    <li>N.B At some point in time, beyond 0.25, we'd to drop XVideo support in favour of OpenGL rendering, there will be more on that subject when we have finalised our plans. Rest assurred that we are considering embedded platforms and work on supported OpenGL ES is already underway.</li>
</ul>
