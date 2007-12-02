<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/css/color.css">
    <!--[if IE]><link rel="stylesheet" type="text/css" href="/css/ie.css" /><![endif]-->
</head>

<body>

<!-- Header -->
<div id="header">
    <div id="header_logo">
        <a href="/"><img src="/img/mythtv.png" class="png" width="182" height="64"></a>
    </div>
    <div id="header_text">
        <ul>
            <li<?php if ($Nav == 'about') echo ' class="cur"' ?>><a href="/">About MythTV</a>
                <div>
                <ul>
                    <li class="first"><a href="/detail">MythTV In Detail</a></li>
                    <li class="last"><a href="/contact">Contact Us</a></li>
                </ul>
                </div>
                </li>
            <li<?php if ($Nav == 'news') echo ' class="cur"' ?>><a href="/news">News</a>
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
                <div>
                <ul>
                    <li class="first last">Download MythTV: Current version:  0.20</li>
                </ul>
                </div>
                </li>
        </ul>
    </div>
</div>

<!-- Page Content -->
<div id="content">

