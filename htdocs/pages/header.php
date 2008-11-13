<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="/css/site.css">
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/css/ie6.css"><![endif]-->
<?php
    /* disabled until we need it
    <!--[if IE]><link rel="stylesheet" type="text/css" href="/css/ie.css" /><![endif]-->
    */
 ?>
</head>

<body>

<!-- Header -->
<div id="header">
    <div id="header_logo">
        <a href="/"><img src="/img/mythtv.png" class="png" width="180" height="64"></a>
    </div>
    <div id="header_text">
        <ul>
            <li<?php if ($Nav == 'about') echo ' class="cur"' ?>><a href="/">About MythTV</a>
                <div>
                <ul>
                    <li class="first"><a href="/detail">MythTV In Detail</a></li>
                    <li><a href="/faq">FAQ</a></li>
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
                    <li><a href="http://svn.mythtv.org/trac/report/">Bugs</a></li>
                    <li><a href="/links">Community Links</a></li>
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
</div>

<!-- Page Content -->
<div id="content">

