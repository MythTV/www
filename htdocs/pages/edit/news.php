<?php
/**
 * MythTV.org news post editor
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author: xris $
 * @copyright   MythTV
 *
 * @package     mythtv.org
 *
/**/

// Globals
    global $Authors;
    global $Topics;

// Load the news display engine
    require_once 'includes/news.php';

// Save?
    if ($_POST['save']) {
        # validate id
        # valide date/time
        # save file
        // Redirect to the standard edit URL
        #redirect_browser('/edit/news/'.$_POST['id']);
    }

// Load an existing news item?
    if ($Path[2]) {
        $post = load_news($Path[2], true);
    // Unknown post id?
        if (!$post) {
            redirect_browser('/edit');
        }
    }
    else {
        $post = array(
            'id'     => null,
            'title'  => 'New Post',
            'date'   => time(),
            'topic'  => 'news',
            'author' => '',
            );
    }

?>
<html>
<head>
    <title><?php echo $post['id'] ? 'Edit post '.$post['id'] : 'Create News Post' ?></title>
</html>
<body>

<h1><?php echo $post['id'] ? 'Edit post '.$post['id'] : 'Create News Post' ?></h1>

<form method="post" action="/edit/news">
<input type="hidden" name="id" value="<?php echo html_entities($post['id']) ?>">

<dl>
    <dt>Topic:</dt>
    <dd><select name="topic"><?php
        foreach ($Topics as $code => $name) {
            echo "<option value=\"$code\"";
            if ($code == $post['topic'])
                echo ' selected="selected"';
            echo ">",html_entities($name),'</option>';
        }?></select>
    <dt>Author:</dt>
    <dd><select name="author"><?php
        foreach (array_keys($Authors) as $author) {
            echo "<option value=\"$author\"";
            if ($author == $post['author'])
                echo ' selected="selected"';
            echo ">$author</option>";
        }?></select>
    <dt>Date:</dt>
    <dd><input type="text" name="date" size="30" value="<?php echo html_entities(date('Y-m-d H:i:s T', $post['date'])) ?>"></dd>
    <dt>Title:</dt>
    <dd><input type="text" name="title" size="35" value="<?php echo html_entities($post['title']) ?>"></dd>
    <dt>Content:</dt>
    <dd><textarea name="content" rows="40" cols="120"><?php echo html_entities($post['content']) ?></textarea></dd>
</dd>

<input type="submit" name="save" value="Save">

</form>

</body>
</html>
