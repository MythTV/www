<?php
/**
 * Index page for mythtv.org editor
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

// No editing
    redirect_browser('/');
    exit;

// Don't allow anyone in without the right IP address
    if (!$Edit) {
        redirect_browser('/');
    }

// Load the news display engine
    require_once 'includes/news.php';

// If a subsection is requested, handle it and then exit
    if ($Path[1]) {
        if ($Path[1] == 'news') {
            require_once 'pages/edit/news.php';
        }
        #elseif ($Path[1] == 'conf') {
        #    require_once 'pages/edit/conf.php';
        #}
        else {
            redirect_browser('/edit');
        }
        exit;
    }

// Otherwise, just display a list of editing options, including the option
// to edit previous news posts.

    global $Authors;
    global $Topics;

// Load all news headers
    $news = load_news_headers();

?>
<html>
<head>
    <title>MythTV.org Editor</title>
</head>
<body>

<h1>MythTV.org Editor</h1>

<ul>
    <li><a href="/edit/news">Create News Post</a></li>
    <!-- li><a href="/edit/conf">Configure Site</a></li -->
</ul>

<h2>News Archive</h2>

<table border="1">
<tr>
    <th>id</th>
    <th>topic</th>
    <th>date</th>
    <th>title</th>
    <th>author</th>
</tr>
<?php
    foreach ($news as $id => $post) {
?>
<tr>
    <td><?php echo $id ?></td>
    <td><?php echo $Topics[$post['topic']] ?></td>
    <td><?php echo date('Y-m-d', $post['date']) ?></td>
    <td><a href="/edit/news/<?php echo $id ?>"><?php echo $post['title'] ?></a></td>
    <td><?php echo $post['author'] ?></td>
</tr>
<?php
    }
?>
</table>

</body>
</html>