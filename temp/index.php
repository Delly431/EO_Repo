<?php include("header.php") ?>
<?php 
switch($_GET['id']) { 

default: 
include ('home.php'); 
break;

case "roster": 
include ('roster.php'); 
break;

case "rank": 
include ('rank.php'); 
break;

case "servers": 
include ('servers.php'); 
break;

case "laws": 
include ('laws.php'); 
break;

case "about": 
include ('about.php'); 
break;

}
?>
<?php include("footer.php") ?>
