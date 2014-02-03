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

// Meta Info
    $Meta['title'] = 'MythTV Support Options';
    $Meta['description']
        = 'MythTV has a variety of options available for both user and'
         .' developer support, including mailing lists, IRC channels, and'
         .' extensive documentation.';

// Load the global page header
    require_once 'tmpl/header.php';
?>

<div id="support">

<h1>MythTV Support</h1>

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
        software that we've all put so much effort into producing.  In fact,
        we pride ourselves on having one of the friendliest community of both
        developers and users who are willing to answer your questions and help
        you through whatever troubles you are having with your Mythbox.
        </p>
        <p>
        The first place to look for answers to basic questions should be to
        check our list of
        <a href="http://www.mythtv.org/wiki/Frequently_Asked_Questions">frequently asked questions</a>.
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
                <a href="http://www.gossamer-threads.com/lists/mythtv/users/">mailing list archive</a>
                for MythTV-users.
                </dd>
            <dt><a href="http://www.mythtv.org/mailman/listinfo/mythtv-theming/">MythTV-theming</a></dt>
            <dd>Discussion about the development of themes and other such artwork
                for MythTV.  This is the place for you if you're interested in talking
                about user interface changes or are interested in helping develop new
                themes or enhance the existing ones.
                <a href="http://www.gossamer-threads.com/lists/mythtv/theming/">Go here</a>
                for a searchable mailing list archive.
                </dd>
            <dt><a href="http://www.mythtv.org/mailman/listinfo/mythtv-translators/">MythTV-translators</a></dt>
            <dd>Discussion about MythTV localization, translation, and development questions
                arising from using Myth in non-english languages.
                <a href="http://www.gossamer-threads.com/lists/mythtv/translators/">Go here</a>
                for a searchable mailing list archive.
                </dd>
            <dt><a href="http://www.mythtv.org/mailman/listinfo/mythtv-dev/">MythTV-dev</a></dt>
            <dd>General discussion about the development of MythTV.  This list
                is used by both developers and users, and usually contains
                discussions that focus on the technical workings and development
                of MythTV and its plugins.
                <a href="http://www.gossamer-threads.com/lists/mythtv/dev/">Go here</a>
                for a searchable mailing list archive.
                </dd>
            <dt><a href="http://www.mythtv.org/mailman/listinfo/mythtv-commits/">MythTV-commits</a></dt>
            <dd>For those who like to keep up with the most technical aspects
                of MythTV development, this read-only lists tracks individual
                code changes, Trac tickets, and bug reports.
                <a href="http://www.gossamer-threads.com/lists/mythtv/commits/">Go here</a>
                for a searchable mailing list archive.
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
            <dt><a href="irc://irc.freenode.net/mythtv-theming">#mythtv-theming</a></dt>
            <dd>This is the MythTV theme developers channel.  Feel free to drop in
                and talk about themes, artwork, and other user interface elements.
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

<div id="support-documentation" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h2>MythTV Documentation</h2>
        <p>
        There are three forms of documentation
        </p>
        <dl>
        <dt><a href="http://wiki.mythtv.org/">MythTV Wiki</a></dt>
            <dd>The wiki is maintained by users like you, as well as by the
                developers.  It is the most up to date piece of documentation
                about MythTV, and contains a variety of pieces of general
                information from screenshots and our
                <a href="http://www.mythtv.org/wiki/Frequently_Asked_Questions">FAQ</a>
                to detailed explanations about of rare configurations set up by
                some of our more adventurous users.
                </dd>
            <dt><a href="/docs/">Official User Documentation</a></dt>
            <dd>We do our best to maintain a detailed document that attempts to
                describe the installation process for MythTV from source code.
                If you are experiencing difficulty during your installation
                and/or configuration, this is the first place you should check
                for information about common roadblocks and installation
                hangups.
                </dd>
            <dt><a href="http://www.cuymedia.com/mythtv-trunk/">Developer Documentation</a></dt>
            <dd>For the technically inclined, we have started to build
                developer documentation to explain the complex structure of
                MythTV's code base.  If you think that you would like to help
                improve MythTV by fixing bugs or adding some of your own
                features, we recommend that you take a look here in order to
                gain a better understanding of our project.
                </dd>
        </dl>
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
        <a href="https://code.mythtv.org/trac/newticket">bug tracking system</a>
        to submit a bug report and let the developers know.
        </p>
        <p>
        Please follow
        <a href="https://code.mythtv.org/trac/wiki/TicketHowTo">the instructions</a>
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

