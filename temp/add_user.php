<?php
   $dbhost = 'localhost';
   $dbuser = 'eo_roster';
   $dbpass = 'guitar';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'INSERT INTO eo_roster '.
      '(name, position, flag, joindate, status) '.
      'VALUES ( "Delly", "Leader/Founder", "USA", "1/1/1901", "Active" () )';
      
   mysql_select_db('eo_roster');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>