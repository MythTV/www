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

// Load the global page header
    require_once 'pages/header.php';

// Only let certain user agent strings through to the actual form
    if (preg_match('/(?:Mozilla|Opera)\/[\d\.]+\s*\(\s*.+?;.+?\)/i', $_SERVER['HTTP_USER_AGENT'])) {
    // Handle any submission requests
        #require_once 'includes/contact.php';
    // Success?
        if ($Contact_Success) {
        }
    // On to the contact form itself
        else {
        // Errors?
            if ($Contact_Err) {
            }
?>
<form method="post" action="feedback.php">

<table border="0" cellspacing="4" cellpadding="0">
<tr>
    <td align="right">Your&nbsp;Name:&nbsp;</td>
    <td><input type="text" name="name" size="40" tabindex="1" value="<?php echo htmlentities($_POST['name']) ?>"<?php
        if ($Contact_Err['name'])
            echo ' class="contact_err"';
        ?>/></td>
    <td nowrap rowspan="3">
        <input type="reset" value="Clear" class="submit" />
        <img src="/img/spacer.gif" width="35" height="1" />
        <input type="submit" disabled name="send" value="Send" class="submit" style="display: none" />
        <input type="submit" name="realsend" value="Send" class="submit" />
        </td>
</tr><tr>
    <td align="right">Your&nbsp;Email:&nbsp;</td>
    <td><input type="text" name="email" size="40" tabindex="2" value="<?php echo htmlentities($_POST['email']) ?>"<?php
        if ($Contact_Err['email'])
            echo ' class="contact_err"';
        ?>/></td>
</tr><tr>
    <td align="right">Subject:&nbsp;</td>
    <td colspan="3"><input type="text" name="subject" tabindex="3" size="40" value="<?php echo htmlentities($_POST['subject']) ?>"<?php
        if ($Contact_Err['subject'])
            echo ' class="contact_err"';
        ?>/></td>
</tr><tr>
    <td align="right" valign="top">Message:&nbsp;</td>
    <td colspan="3"><textarea name="text" rows="10" cols="70" tabindex="4" wrap="hard"<?php
        if ($Contact_Err['text'])
            echo ' class="contact_err"';
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

// Load the global page footer
    require_once 'pages/footer.php';

