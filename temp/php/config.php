<?php

// mysql_connect("localhost", "eo_roster", "guitar")
$conn = mysql_connect("localhost","eo_roster","guitar") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
	
?>
