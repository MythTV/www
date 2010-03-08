<?php
/**
 * Overview of MythTV Support.
 *
 * @url         $URL: svn+ssh://svn.mythtv.org/var/lib/svn-www/www.mythtv.org/pages/support.php $
 * @date        $Date: 2009-10-31 14:37:19 -0700 (Sat, 31 Oct 2009) $
 * @version     $Revision: 265 $
 * @author	$Author: xris $
 * @copyright   MythTV
 *
 * @package     mythtv.org
 *
/**/

// Which section are we in?
    $Nav = 'about';

// Meta Info
    $Meta['title'] = 'MythTV Theming and UI Patch Contest';

// Load the global page header
    require_once 'tmpl/header.php';
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<link rel="stylesheet" media="screen" type="text/css" href="/css/zoomimage.css" />
<script type="text/javascript" src="/js/eye.js"></script>
<script type="text/javascript" src="/js/utils.js"></script>
<script type="text/javascript" src="/js/zoomimage.js"></script>

<div id="theming-competition">

<h1>MythTV Theming and UI Patch Contest</h1>

<h2>Voting!</h2>
<?php
 if (!file_exists($_SERVER['vote_db_file'])) {
    touch($_SERVER['vote_db_file']);
    $vdb = new PDO('sqlite:'.$_SERVER['vote_db_file']);
    $vdb->query('CREATE TABLE votes (
                ip UNSIGNED INTEGER NOT NULL PRIMARY KEY DEFAULT 0,

                lcarsUsability INTERGER NOT NULL,
                lcarsConsistency INTERGER NOT NULL,
                lcarsOriginality INTERGER NOT NULL,
                lcarsAppeal INTERGER NOT NULL,
                lcarsCleanliness INTERGER NOT NULL,

                transblueUsability INTERGER NOT NULL,
                transblueConsistency INTERGER NOT NULL,
                transblueOriginality INTERGER NOT NULL,
                transblueAppeal INTERGER NOT NULL,
                transblueCleanliness INTERGER NOT NULL,

                childUsability INTERGER NOT NULL,
                childConsistency INTERGER NOT NULL,
                childOriginality INTERGER NOT NULL,
                childAppeal INTERGER NOT NULL,
                childCleanliness INTERGER NOT NULL
                );');
 }
 else
  $vdb = new PDO('sqlite:'.$_SERVER['vote_db_file']);

 $targetInt = ip2long($_SERVER['REMOTE_ADDR'])+34345;

 if (isset($_POST['answer']) && $_POST['answer']==$targetInt && isset($_POST['theme'])) {
  $sql = '';
  $keys = array('Usability', 'Consistency', 'Originality', 'Appeal', 'Cleanliness');
  $themes = array('lcars', 'transblue', 'child');
  $valid = true;
  foreach ($themes as $theme)
   foreach ($keys as $key) {
    $k = "$theme$key";
    $_POST[$k] = intval($_POST[$k]);
    if ($_POST[$k] < 1)
     $valid = false;
    if ($_POST[$k] > 5)
     $valid = false;
    $sql .= ', '.$_POST[$k];
   }
  if ($valid) {
   $_COOKIE['theme'] = rand();
   $vdb->query('REPLACE INTO votes VALUES ('.ip2long($_SERVER['REMOTE_ADDR']).$sql.');');
  }
 }

 if (!isset($_COOKIE['theme']))
  list($voted) = $vdb->query('SELECT ip FROM votes WHERE ip = '.ip2long($_SERVER['REMOTE_ADDR']))->fetch();

// So to prevent automated votes, generate a string that would be a pain to parse without a javascript engine.
 $jsQuestion = "$('#answer').val(0";
 while ($targetInt != 0) {
    $i = rand(1, $targetInt);
    $jsQuestion .= "+$i";
    $targetInt -= $i;

    switch ($targetInt % 6) {
        case 0:
            $jsQuestion .= '/*+-'.rand(0, 65525).'-'.rand(0, 65525).'+'.rand(0, 65525).'*/';
            break;
        case 1:
            $jsQuestion .= '+-100+100';
            break;
        case 2:
            $jsQuestion .= "\n//+".rand(0, 65525).'-'.rand(0, 65525).'+'.rand(0, 65525)."\n";
            break;
        case 3:
            $jsQuestion .= "/*);*/";
            break;
        case 4:
            $jsQuestion .= "//);\n";
            break;
        case 5:
            $jsQuestion .= "/**\/); $('#answer').val(0+".rand(0, 65525).'-'.rand(0, 65525).'+'.rand(0, 65525)."*/";
    }

 }
 $jsQuestion .= ');';
 $jsQuestion = urlencode($jsQuestion);
?>
<?php if (!isset($_COOKIE['theme']) && !$voted) { ?>
<form method="post" id="voteForm">
    <input type="hidden" name="answer" id="answer" value="<?php echo rand(0, 65535); ?>">
    <table style="text-align: center;">
        <tr>
            <td>
                <a href="/themes/LCARS.tar.gz">Download LCARS</a><br><br>
                <a class="LCARS" href="/img/screenshots/themes/LCARS-1-resized.png"><img style="border: none;" src="/img/screenshots/themes/LCARS-1-resized.png" width="150" height="100"></a>
                <br>
                <select style="width: 150px;" name="lcarsUsability"><option disabled="disabled" selected="selected">Usability<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="lcarsConsistency"><option disabled="disabled" selected="selected">Consistency<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="lcarsOriginality"><option disabled="disabled" selected="selected">Originality<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="lcarsAppeal"><option disabled="disabled" selected="selected">Visual Appeal<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="lcarsCleanliness"><option disabled="disabled" selected="selected">Cleanliness of Code<option>1<option>2<option>3<option>4<option>5</select><br>
            </td>
            <td>
                <a href="/themes/TransBlue.tar.gz">Download TransBlue</a><br><br>
                <a class="TransBlue" href="/img/screenshots/themes/TransBlue-1-resized.png"><img style="border: none;" src="/img/screenshots/themes/TransBlue-1-resized.png" width="150" height="100"></a>
                <?php for ($i=2; $i <= 11; $i++) echo '<a class="TransBlue" href="/img/screenshots/themes/TransBlue-'.$i.'-resized.png"></a>'; ?>
                <br>
                <select style="width: 150px;" name="transblueUsability"><option disabled="disabled" selected="selected">Usability<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="transblueConsistency"><option disabled="disabled" selected="selected">Consistency<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="transblueOriginality"><option disabled="disabled" selected="selected">Originality<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="transblueAppeal"><option disabled="disabled" selected="selected">Visual Appeal<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="transblueCleanliness"><option disabled="disabled" selected="selected">Cleanliness of Code<option>1<option>2<option>3<option>4<option>5</select><br>
            </td>
            <td>
                <a href="/themes/Childish.tar.gz">Download Childish</a><br><br>
                <a class="Childish" href="/img/screenshots/themes/Childish-1-resized.png"><img style="border: none;" src="/img/screenshots/themes/Childish-1-resized.png" width="150" height="100"></a>
                <?php for ($i=2; $i <= 20; $i++) echo '<a class="Childish" href="/img/screenshots/themes/Childish-'.$i.'-resized.png"></a>'; ?>
                <br>
                <select style="width: 150px;" name="childUsability"><option disabled="disabled" selected="selected">Usability<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="childConsistency"><option disabled="disabled" selected="selected">Consistency<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="childOriginality"><option disabled="disabled" selected="selected">Originality<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="childAppeal"><option disabled="disabled" selected="selected">Visual Appeal<option>1<option>2<option>3<option>4<option>5</select><br>
                <select style="width: 150px;" name="childCleanliness"><option disabled="disabled" selected="selected">Cleanliness of Code<option>1<option>2<option>3<option>4<option>5</select><br>
            </td>
        </tr>
    </table>
    <br>
    <input id="voteSubmit" type="submit" name="theme" value="Place your Votes!">
</form>
<script type="text/javascript">
    $(function() {
        eval(unescape('<?php echo $jsQuestion; ?>'));
        $('#voteForm').submit(function() {
         var list = $('#voteForm select');
         i = 0;
         while (i < list.length) {
          if (list[i].selectedIndex == 0)
           return false;
          i++
         }
         });
        var options = { centered: true,
                        duration: 0,
                        beforeZoomIn: function() {$('div.zooimage').zoomimageClear(); $('select').hide();},
                        onZoomOut: function() {$('select').show();},
                        Opacity: .9
                      };
        $('a.LCARS').zoomimage(options);
        $('a.TransBlue').zoomimage(options);
        $('a.Childish').zoomimage(options);
        $('body').click(function() {$('div.zooimage').zoomimageClear();});
    });
</script>
<?php } else { ?>
<p>Thank you for voting! Results will be released soon!</p>
<?php } ?>
<h2>Contest Overview</h2>

<p>If you've ever thought about creating a theme for MythTV, you're curious about MythUI, or you wished MythTV had themes that rivaled some of the other media center applications available, now is your chance to do something about it and qualify to win some great prizes in the process! Open Source friendly vendors such as Hauppauge and Schedules Direct have been extremely generous in donating new hardware, software and services for this contest, and they have our very sincere thanks.</p>

<p>Starting with the release of MythTV 0.22, we will be running a MythTV Theming contest. Anyone can enter to win! Prizes will include (competition and prizes void where prohibited):</p>

<p><em>First Prize:</em> A Hauppauge HD-PVR ($249 Value), A Schedules Direct T-Shirt, a free year of Schedules Direct service, and the inclusion of the theme into MythTV to ship with MythTV 0.23 (Due out approximately March 2010).</p>

<p><em>Second Prize:</em> A Hauppauge HVR-2200/2250 ($149 Value, model will depend on location of winner), a Schedules Direct T-shirt, and a free year of Schedules Direct service.</p>

<p><em>Third Prize:</em> A Hauppauge HVR-1200/1250 ($69 Value, model will depend on location of winner), A Schedules Direct T-Shirt, and a free year of Schedules Direct service.</p>

<p><em>Best UI Patch Submission:</em> A Schedules Direct T-Shirt, and a free year of Schedules Direct service.</p>

<p>Beyond the above prizes, ten (10) honorable mention prizes will be awarded for submission of a completed theme. Honorable mention prize winners will receive a free year of Schedules Direct service and consideration of their theme for inclusion in MythTV's codebase. All entrants will have their work publicly displayed at MythTV.org during the public voting portion of the contest.</p>


<h2>How do I win?</h2>

<p>In short, complete the best original theme for MythTV 0.22-0.23 and submit it by the deadline! More specifically, the work will be judged by the MythTV developers on standards of Usability, Consistency, Originality, Visual Appeal, and Cleanliness of Code.</p>

<p><em>Usability:</em> The theme should be easily used by someone not experienced with MythTV. The behavior should be predictable and understandable. Text should be readable and Images should be easily interpreted. Your theme should be fully compatible with MythTV trunk upon submission.</p>

<p><em>Consistency:</em> All themed screens should exhibit an overall unified design, and should behave similarly to one another. Single-purpose widget use should be minimal or non-existent.</p>

<p><em>Originality:</em> Your theme cannot be a copy of an existing MythTV Theme, DVR interface, or other media center &quot;skin.&quot; Clear copies of XBMC, etc. skins are not eligible to compete. It is <em>absolutely okay</em> to get inspiration from other designs and use a similar approach, but the work must be very clearly your own. MythTV developers reserve final say on whether a theme is original.</p>

<p><em>Visual Appeal:</em> The tasteful use of images, design aesthetic, and widgets to create an interface with &quot;Wow!&quot; factor.</p>

<p><em>Cleanliness of Code:</em> The theme should follow common MythTV theme code practices, including four-space indentation and linefeeds between widgets. The images and XML should be well organized into directories and the code should be easy to read and understand. Commenting is strongly encouraged.</p>


<h2>What counts as a &quot;complete&quot; MythTV Theme?</h2>

<p>Not all MythTV screens need be themed, though themes that are more complete will receive a higher score in consistency and usability categories. The following portions of MythTV should be themed to be considered complete:</p>

<ul>
<li>All non-plugin mythfrontend screens (recording options, Program Guide, Watch Recordings, settings popups, etc.)</li>
<li>All mythtv-setup screens (Icon downloader, channel editor, etc.)</li>
<li>MythVideo</li>
<li>MythMusic</li>
<li>MythNews</li>
<li>MythWeather</li>
<li>MythGallery</li>
<li>MythBrowser</li>
</ul>

<p>Theming more than just the above will further improve your scores.</p>

<p>All themes must be submitted before the feature freeze for MythTV 0.23 (Tentatively February 1, 2010). Submitting your theme early is fine, but late themes will not be accepted.</p>


<h2>MythUI doesn't do everything I want. Can I submit a patch?</h2>

<p>YES! Theme entries must only use code included in myth, but you *may* submit patches for new features and use them if they are applied. Although patch submission will not be counted towards your theme score, it will qualify you for the Best MythUI Patch prize. If no theme authors submit MythUI patches, the winner will be chosen from MythUI patches submitted in the 0.22-0.23 development cycle. Note that review and application of patches is limited by developer time, so review and application of patches may take some time and is not guaranteed.</p>

<p>The themes may make use of *any* currently existing MythUI widgets and capabilities, as well as any functionality added during the 0.23 development cycle.</p>

<h2>Can I work as a part of a group?</h2>

<p>Working as a team is welcome and strongly encouraged, but the prize packages will remain the same regardless of number of people submitting a single theme. We will make an effort to reward more members of the team if possible, but only the established prize packages are a certainty.</p>


<h2>This all sounds great, but I have no idea how to theme MythTV!</h2>

<p>MythUI has fairly complete widget and concept documentation located at the MythTV wiki:</p>

<a href="http://www.mythtv.org/wiki/MythUI_Theme_Development">
http://www.mythtv.org/wiki/MythUI_Theme_Development</a>

<p>You can also use the Demo theme to help you develop your theme. The demo theme shows how effects in other media center and DVR softwares are achieved in MythUI:</p>

<a href="http://www.mythtv.org/wiki/MythUI_Demo_Theme">
http://www.mythtv.org/wiki/MythUI_Demo_Theme</a>

<p>Probably most importantly, you should sign up for the mythtv-theming mailing list and join us in IRC at irc.freenode.net in the channel #mythtv-theming. There, you can get one on one support from experienced themers and discuss how best to achieve your goals. You can join the theming mailing list here:</p>

<a href="http://www.mythtv.org/mailman/listinfo/mythtv-theming/">
http://www.mythtv.org/mailman/listinfo/mythtv-theming/</a>


<h2>How will the judging work?</h2>

<p>You must submit your theme by midnight Eastern Standard Time on the night of the 0.23 feature freeze (tentatively February 1st, 2010). We will open the theme judging to the public on the web. Each participating MythTV developer will evaluate all the themes based on the above criteria. In addition, the public vote will constitute an &quot;extra developer,&quot; with the highest rated theme as judged by the public receiving an extra vote.</p>

<h2>What happens to my work after the contest?</h2>

<p>All themes must be submitted under the GPLv2 license. Any of the themes may be selected for inclusion in MythTV, so they must be compatible with its license. The Grand Prize winner will be (at MythTV developer discretion) included in MythTV 0.23.</p>

<h2>What about fonts and pictures?</h2>

<p>In addition to being GPLv2, your theme must use open, freely available fonts with license terms that allow you and anyone else to redistribute them. If you incorporate stock images into your theme, you must keep a record of the location each was found, and provide licensing information for it to confirm that it is freely distributable.</p>

<p>With that, get your creative juices flowing and join us on the mailing list or IRC to have your questions answered! Please send us a note on the theming mailing list so that we know you are interested and so that we can associate a project with a person.</p>

</div>
<?php
// Load the global page footer
    require_once 'tmpl/footer.php';
