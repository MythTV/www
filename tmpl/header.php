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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-152H1V678Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-152H1V678Z');
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/site.css">
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/css/ie6.css"><![endif]-->
    <!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/css/ie.css" ><![endif]-->
    <link rel="stylesheet" type="text/css" href="/css/print.css" media="print">
    <link rel="alternate" type="application/atom+xml" title="MythTV News" href="http://feeds.feedburner.com/MythTVorg" >
<?php /*
    <link rel="alternate" type="application/atom+xml" title="MythTV News - Atom" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/feed" >
    <link rel="alternate" type="application/rss+xml" title="MythTV News - RSS" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/feed?rss" >
     */ ?>
    <link rel="icon"          href="/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
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
        <a href="/"><img src="/img/mythtv.png" class="png" width="180" height="64" border="0" alt="MythTV"></a>
    </div>
    <div id="header_text">
        <ul>
            <li<?php if ($Nav == 'about') echo ' class="cur"' ?>><a href="/detail/mythtv">About MythTV</a>
                <div>
                <ul>
                    <li class="first"><a href="/detail/mythtv">MythTV In Detail</a></li>
                    <li><a href="/license">Licensing</a></li>
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
                    <li><a href="https://forum.mythtv.org/">Forums</a></li>
                    <li><a href="http://wiki.mythtv.org/">Wiki</a></li>
                    <li><a href="https://github.com/MythTV/mythtv/issues/new/choose">Bugs</a></li>
                    <li class="last"><a href="https://code.mythtv.org/trac/">Development</a></li>
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

