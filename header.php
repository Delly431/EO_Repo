<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ExiledOrder.com</title>
<link rel="stylesheet" href="style_eo.css">
<link rel="shortcut icon" href="favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.js"></script>
<style type="text/css">
/*<![CDATA[*/
.hide { display:none; }
/*]]>*/
</style>

<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
function toggleMe(IDS){
  var e=document.getElementById(IDS);    if(!e) { return true; }
  allOff();
  e.style.display="block";
  return true;
}
function allOff() {
  var sel = document.getElementById('answerSection').getElementsByTagName('div');
  for (var i=0; i<sel.length; i++) { sel[i].style.display = 'none'; }
}
onload = function() { allOff(); }
/*]]>*/
</script>
</head>
<a name="#top"></a>
<body bgcolor="#">
<div id="eo_logo"><img src="images/eo_logo.png" /></div>
<center>
<div id="site_wrap">
    <div id="fixed_nav">
    	<div id="nav_menu">
        <ul class="nav">
		<li><a href="index.php">HOMEPAGE</a></li>
		<li><a href="index.php?id=roster">ROSTER</a></li>
		<li><a href="/forums">FORUMS</a></li>
        <li><a href="index.php?id=rank">RANKS</a></li>
        <li><a href="index.php?id=laws">LAWS</a></li>
		<li><a href="index.php?id=servers">SERVERS</a></li>
		<li><a href="http://exiledorder.com/forums/index.php?/topic/15-application-format/">JOIN&nbsp;US</a></li>
		<li class="last"><a href="index.php?id=about">ABOUT&nbsp;[EO]</a></li>
		</ul>
        </div>
    </div>
    <div style="clear: both;"></div>