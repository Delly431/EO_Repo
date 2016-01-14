<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0036)http://www.exiledorder.com/index.php -->

<?php
  // Let's create a unique class to append to our html for each specific page
  $opening_html_tag = '<html xmlns="http://www.w3.org/1999/xhtml">';
  // if we have the unique page id let's add it to the html element
  if (!empty($_GET['id'])) {
    $opening_html_tag = '<html xmlns="http://www.w3.org/1999/xhtml" class="' . $_GET['id'] . '">';
  } else if ($_SERVER['REQUEST_URI'] == '/temp/') {
    $opening_html_tag = '<html xmlns="http://www.w3.org/1999/xhtml" class="home">';
  }
  // echo out what opening_html_tag is
  echo $opening_html_tag;
?>
  <head>
    <link rel="stylesheet" href="build/css/main.css">
    <title>ExiledOrder.com</title>
    <link rel="shortcut icon" href="http://www.exiledorder.com/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <nav class="desktop-nav-wrapper">
      <ul class="desktop-nav">
        <li class="logo icn"></li>
        <li><a href="index.php?id=home">HOMEPAGE</a></li>
        <li><a href="index.php?id=roster">ROSTER</a></li>
        <li><a href="http://www.exiledorder.com/forums">FORUMS</a></li>
        <li><a href="index.php?id=rank">RANKS</a></li>
        <li><a href="index.php?id=laws">LAWS</a></li>
        <li><a href="index.php?id=servers">SERVERS</a></li>
        <li><a href="http://exiledorder.com/forums/index.php?/topic/15-application-format/">JOIN&nbsp;US</a></li>
        <li><a href="index.php?id=about">ABOUT&nbsp;[EO]</a></li>
      </ul>
    </nav>
    <nav class="mobile-nav-master">
      <div class="mobile-logo icn"></div>
      <div class="mobile-nav-wrapper">
        <div class="mobile-menu-opener-wrapper" data-role="mobile_menu_opener">
          <div class="mobile-menu-opener"></div>
        </div>
      </div>
      <ul class="mobile-nav" data-role="mobile_menu">
        <li><a href="index.php?id=home">HOMEPAGE</a></li>
        <li><a href="index.php?id=roster">ROSTER</a></li>
        <li><a href="http://www.exiledorder.com/forums">FORUMS</a></li>
        <li><a href="index.php?id=rank">RANKS</a></li>
        <li><a href="index.php?id=laws">LAWS</a></li>
        <li><a href="index.php?id=servers">SERVERS</a></li>
        <li><a href="http://exiledorder.com/forums/index.php?/topic/15-application-format/">JOIN&nbsp;US</a></li>
        <li><a href="index.php?id=about">ABOUT&nbsp;[EO]</a></li>
      </ul>
    </nav>