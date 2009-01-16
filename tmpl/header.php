<?php
/**
 * MythTV.org main page header.
 *
 * Please set $Meta variables appropriately before including this file.
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
/**/

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title><?php echo $Meta['title'] ?></title>
    <link rel="stylesheet" type="text/css" href="/<?php echo svn_rev ?>/css/site.css">
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/css/ie6.css"><![endif]-->
    <!--[if IE]><link rel="stylesheet" type="text/css" href="/css/ie.css" /><![endif]-->
    <link rel="alternate" type="application/atom+xml" title="MythTV News - Atom" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/feed" />
    <link rel="alternate" type="application/rss+xml" title="MythTV News - RSS" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/feed?rss" />
    <link rel="icon"          href="/<?php echo svn_rev ?>/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/<?php echo svn_rev ?>/img/favicon.ico" type="image/x-icon">
<?php
    if ($Meta['description'])
        echo '    <meta name="description" content="', htmlentities($Meta['description']), "\">\n";
    if ($Meta['keywords'])
        echo '    <meta name="keywords" content="', htmlentities($Meta['keywords']), "\">\n";
?>
</head>

<body>

<!-- Header -->
<div id="header">
    <div id="header_logo">
        <a href="/"><img src="/img/mythtv.png" class="png" width="180" height="64" border="0"></a>
    </div>
    <div id="header_text">
        <ul>
            <li<?php if ($Nav == 'about') echo ' class="cur"' ?>><a href="/detail/mythtv">About MythTV</a>
                <div>
                <ul>
                    <li class="first"><a href="/detail/mythtv">MythTV In Detail</a></li>
                    <li><a href="http://www.mythtv.org/wiki/Frequently_Asked_Questions">FAQ</a></li>
                    <li class="last"><a href="/contact">Contact Us</a></li>
                </ul>
                </div>
                </li>
            <li<?php if ($Nav == 'support') echo ' class="cur"' ?>><a href="/support">Support</a>
                <div>
                <ul>
                    <li class="first"><a href="/support">Overview</a></li>
                    <li><a href="/docs/">Documentation</a></li>
                    <li><a href="http://wiki.mythtv.org/">Wiki</a></li>
                    <li><a href="http://svn.mythtv.org/trac/wiki/TicketHowTo">Bugs</a></li>
                    <li class="last"><a href="http://svn.mythtv.org/trac/">Development</a></li>
                </ul>
                </div>
                </li>
            <li<?php if ($Nav == 'download') echo ' class="cur"' ?>><a href="/download">Download</a>
                </li>
            <li<?php if ($Nav == 'news') echo ' class="cur"' ?>><a href="/news">News Archive</a>
                </li>
        </ul>
    </div>
    <div id="header-end"></div>
</div><!-- header -->

<!-- Page Content -->
<div id="content">

