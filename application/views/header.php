<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
  // Create the HTML header tag with the class of the session page type variable.
  $html_opening_tag = new html_element('html', null, array(
    'xmlns' => 'http://www.w3.org/1999/xhtml',
    'class' => $_SESSION['pageType'],
  ));
  $html_opening_tag->__toString();
?>
<head>
  <link rel="stylesheet" href="build/css/main.css">
  <link rel="stylesheet" href="build/css/servers.css">
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
      <li><a href="/forums">FORUMS</a></li>
      <li><a href="index.php?id=rank">RANKS</a></li>
      <li><a href="index.php?id=laws">LAWS</a></li>
      <li><a href="index.php?id=servers">SERVERS</a></li>
      <li><a href="http://exiledorder.com/forums/index.php?/topic/15-application-format/">JOIN&nbsp;US</a></li>
      <li><a href="index.php?id=about">ABOUT [EO]</a></li>
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
      <li><a href="/forums">FORUMS</a></li>
      <li><a href="index.php?id=rank">RANKS</a></li>
      <li><a href="index.php?id=laws">LAWS</a></li>
      <li><a href="index.php?id=servers">SERVERS</a></li>
      <li><a href="http://exiledorder.com/forums/index.php?/topic/15-application-format/">JOIN&nbsp;US</a></li>
      <li><a href="index.php?id=about">ABOUT [EO]</a></li>
    </ul>
  </nav>