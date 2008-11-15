<?php
/**
 * Overview of MythTV Support.
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @copyright   MythTV
 *
 * @package     mythtv.org
 *
/**/

// Which section are we in?
    $Nav = 'support';

// Load the global page header
    require_once 'tmpl/header.php';
?>

<div id="support">

<div id="support-community" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h2>Join the Community</h2>
        <p>
        MythTV has a thriving community of developers and users who are happy
        to answer questions and help out those who are interested in using the
        software that we've all put so much effort into producing.
        </p>
        <h3>Mailing Lists</h3>
        <p>
        One of the best ways to get help is through one of our official mailing
        lists.
        </p>
        <dl>
            <dt><a href="http://www.mythtv.org/mailman/listinfo/mythtv-users/">MythTV-users</a></dt>
            <dd>Usually less on-topic than the more technical mythtv-dev list
                described below, this is a place for users to discuss hardware
                setups, configuration problems, etc.  It's a fairly busy list,
                but is the first place that we recommend you look if you are
                interested in learning more about MythTV and/or getting involved
                with its user community.  Here is the
                <a href="http://www.gossamer-threads.com/archive/MythTV_C2/Users_F11/">mailing list archive</a>
                for MythTV-users.
                </dd>
            <dt><a href="http://www.mythtv.org/mailman/listinfo/mythtv-dev/">MythTV-dev</a></dt>
            <dd>General discussion about the development of MythTV.  This list
                is used by both developers and users, and usually contains
                discussions that focus on the technical workings and development
                of MythTV and its plugins.
                <a href="http://www.gossamer-threads.com/archive/MythTV_C2/Dev_F10/">Go here</a>
                for a searchable mailing list archive.
                </dd>
            <dt><a href="http://www.mythtv.org/mailman/listinfo/mythtv-commits/">MythTV-commits</a></dt>
            <dd>For those who like to keep up with the most technical aspects
                of MythTV development, this read-only lists tracks individual
                code changes, Trac tickets, and bug reports.
                </dd>
        </dl>

        <h3>IRC</h3>
        <p>
        <a href="http://en.wikipedia.org/wiki/Irc">Internet Relay Chat</a>
        is one of the oldest forms of communication on the internet, and still
        thrives today.  Like many open source projects, MythTV has an active
        user community on the <a href="http://freenode.net/">freenode network</a>.
        </p>
        <dl>
            <dt><a href="irc://irc.freenode.net/mythtv-users">#mythtv-users</a></dt>
            <dd>This user support channel should be your first stop in IRC.
                There are usually over 150 people who frequent this channel,
                including dozens of experienced MythTV users who are happy to
                offer setup, configuration, and troubleshooting advice to other
                MythTV users, as well as to those people who are just
                interested in knowing a little more about MythTV before taking
                the plunge.  You will also find that several of the core MythTV
                development team hangs out here to help answer questions, too.
                </dd>
            <dt><a href="irc://irc.freenode.net/mythtv">#mythtv</a></dt>
            <dd>This is the MythTV developers channel.  Feel free to drop in
                here to listen to or take part in discussions about the
                development of MythTV, but please do not confuse it with the
                user support channel.
                </dd>
        </dl>

        <h3>Forums</h3>
        <p>
        Because the MythTV developers have chosen to focus on mailing lists
        instead of forums, there are no official web-based forums to discuss
        MythTV.  However, the  <a href="http://www.mythtvtalk.com/">MythTV Talk</a>
        forums are generally considered to be one of the better forums for
        discussions about MythTV.
        </p>
    </div>
</div>

<div id="support-bugs" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h2>How to report Bugs</h2>
        <p>
        If you think you've found a bug in MythTV, you can use our
        <a href="http://svn.mythtv.org/trac/newticket">bug tracking system</a>
        to submit a bug report and let the developers know.
        </p>
        <p>
        Please follow
        <a href="http://svn.mythtv.org/trac/wiki/TicketHowTo">the instructions</a>
        we have provided for how to provide a detailed and helpful bug report
        </p>
        <p>
        However, please be aware that though the developers strive to keep
        MythTV as free from bugs as possible, it may take us awhile before we
        are able to address your specific bug, and don't be surprised if
        non-critical bugs are fixed in the development version of MythTV (that
        which will eventually become the next major release) but not ported
        back to the stable branch.
        </p>
    </div>
</div>

<div id="support-developers" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h2>Contact the Developers</h2>
        <p>
        In general, the MythTV developers prefer that you seek out
        community-based support for questions about your personal MythTV
        installations, but we acknowledge that there may be times when people
        and corporations wish to contact us with questions or inquiries that
        require our specific insight about the MythTV code or community.  To
        that end, we have provided a <a href="/contact">contact form</a> that
        you can use to get in touch with those who are best equipped to respond
        your inquiry.
        </p>
    </div>
</div>

</div><!-- support -->

<?php
// Load the global page footer
    require_once 'tmpl/footer.php';

