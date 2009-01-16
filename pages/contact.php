<?php
/**
 * Feedback form to contact MythTV Developers.
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
    $Nav = 'about';

// Meta Info
    $Meta['title'] = 'Contact the MythTV Developers';
    $Meta['description']
        = 'Use this page to contact the MythTV developers.';

// Load the global page header
    require_once 'tmpl/header.php';

// Only let certain user agent strings through to the actual form
    if (preg_match('/(?:Mozilla|Opera)\/[\d\.]+\s*\(\s*.+?;.+?\)/i', $_SERVER['HTTP_USER_AGENT'])) {
    // Handle any submission requests
        require_once 'includes/contact.php';
    // Success?
        if ($Contact_Success) {
            echo 'Thank you! <a href="/contact">Send another</a>.';
        }
    // On to the contact form itself
        else {
?>

<div id="contact" class="inset">
    <div class="left">
        <div class="top"></div>
        <div class="middle">
            <div class="title"></div>
        </div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <h1>Contact the MythTV Developers</h1>

        <p>
        <strong>Do not</strong> use this form for
        <a href="http://svn.mythtv.org/trac/newticket">bug reports</a>,
        <a href="http://www.mythtv.org/wiki/index.php/Feature_Wishlist">feature requests</a>,
        <a href="/support">support inquiries</a>, or other similar queries that
        are easily answered by using the
        <a href="/support">appropriate community support tools</a>.  You will
        not receive a response.
        </p>

        <p>
        <strong>Do</strong> use this form to contact the MythTV
        developers about topics listed below which cannot be answered
        through normal <a href="/support">community support channels</a>.
        </p>

        <hr>

<?php
        if ($Contact_Err) {
            echo '<div class="error">', $Contact_Err['subject'], '</div>';
        }
?>
        <form method="post" action="/contact">

        <table border="0" cellspacing="4" cellpadding="0">
        <tr>
            <td align="right">Your&nbsp;Name:&nbsp;</td>
            <td><input type="text" name="name" size="40" tabindex="1" value="<?php echo htmlentities($_POST['name']) ?>"<?php
                if ($Contact_Err['name'])
                    echo ' class="error"';
                ?>/></td>
            <td nowrap rowspan="4">
                <input type="reset" value="Clear" class="submit" />
                <img src="/<?php echo svn_rev ?>/img/spacer.gif" width="35" height="1" />
                <input type="submit" disabled name="send" value="Send" class="submit" style="display: none" />
                <input type="submit" name="realsend" value="Send" class="submit" />
                </td>
        </tr><tr>
            <td align="right">Your&nbsp;Email:&nbsp;</td>
            <td><input type="text" name="email" size="40" tabindex="2" value="<?php echo htmlentities($_POST['email']) ?>"<?php
                if ($Contact_Err['email'])
                    echo ' class="error"';
                ?>/></td>
        </tr><tr>
            <td align="right">Reason for Contact:&nbsp;</td>
            <td colspan="3"><select name="reason" tabindex="3"><?php
                global $Contact;
                foreach (array_keys($Contact) as $reason) {
                    echo '<option';
                    if ($reason == $_POST['reason'])
                        echo ' selected="selected"';
                    echo '>', html_entities($reason), '</option>';
                }
                ?></select></td>
        </tr><tr>
            <td align="right">Subject:&nbsp;</td>
            <td colspan="3"><input type="text" name="subject" tabindex="4" size="40" value="<?php echo htmlentities($_POST['subject']) ?>"<?php
                if ($Contact_Err['subject'])
                    echo ' class="error"';
                ?>/></td>
        </tr><tr>
            <td align="right" valign="top">Message:&nbsp;</td>
            <td colspan="3"><textarea name="text" rows="10" cols="70" tabindex="5" wrap="hard"<?php
                if ($Contact_Err['text'])
                    echo ' class="error"';
                ?>><?php echo htmlentities($_POST['text']) ?></textarea></td>
        </tr>
        </table>
        </form>

<?php
        }
    }
    else {
?>
        <hr />
        <h2>
        Your browser user agent does not match the standard recognized format.<br />
        Please use a standard web browser in order to use this feedback form.
        </h2>
<?php
    }
?>
    </div><!-- class:content -->
</div><!-- contact -->

<?php
// Load the global page footer
    require_once 'tmpl/footer.php';

