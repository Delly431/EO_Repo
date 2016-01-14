<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ExiledOrder.com</title>
<link rel="stylesheet" href="style_eo.css">
<link rel="shortcut icon" href="favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.js"></script>
<script>
$('.smooth').on('click', function() {
    $.smoothScroll({
        scrollElement: $('body'),
        scrollTarget: '#' + this.id
    });
    
    return false;
});
</script>
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
<body bgcolor="#">
<center>
<div id="site_wrap">
    <div id="fixed_nav">
    	<div id="nav_menu">
        <ul class="nav">
		<li><a href="#">HOMEPAGE</a></li>
		<li><a href="#">ROSTER</a></li>
		<li><a href="/forums">FORUMS</a></li>
        <li><a href="#rank">RANKS</a></li>
        <li><a href="#">LAWS</a></li>
		<li><a href="#">ABOUT&nbsp;[EO]</a></li>
		<li><a href="#">JOIN&nbsp;US</a></li>
		
		<li class="last"><a href="#">ALLIES</a></li>
		</ul>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div id="head_img">
        <div id="head_text">
        <a id="home" class="smooth"></a>
        <h1>Welcome to Exiled Order.com</h1><br />
        <iframe width="560" height="315" src="https://www.youtube.com/embed/r1ZJf59T3Kk" frameborder="0" allowfullscreen></iframe><br />
        <br />
        <div style="width :460px;">We are in the process of moving to a different web hosting provider. Please sit tight and watch this little movie to ease the pain of posting on our forums because I know how bad you want to!</div>
        </div>
    </div>
    <div style="clear: both;"></div>
	
</div>
</center>
</body>
</html>
