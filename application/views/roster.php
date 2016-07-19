<center>
<img src="assets/images/roster_banner.png" alt="roster"/>
<div id="roster_disp">
	<center><h1>STAFF</h1></center>
	
	<div class="roster_wrap">
		<div class="roster_icon"><div class="roster_text"></div></div>
		<div class="roster_name"><div class="roster_text">NAME</div></div>
		<div class="roster_rank"><div class="roster_text">RANK</div></div>
		<div class="roster_flag"><div class="roster_text">LOCATION</div></div>
		<div class="roster_game">
        <div class="roster_text">
        </div>
		</div>
		<div class="roster_date"><div class="roster_text">JOIN DATE</div></div>
		<div class="roster_status"><div class="roster_text"><span class="'.$nspan.'">ACTIVITY</span></div></div>
	</div>
<?php
include "database.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_staff";
$result = $conn->query($sql);
$loopResult = '';
$location='';
$nspan='';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$location=strtolower ($row["location"] );
		$nspan=strtolower ($row["activity"] );
        $loopResult .= ' 
            <div class="roster_wrap">
			<div class="roster_icon"><div class="roster_text"><img src="assets/images/small_icon.png" alt="icon"/></div></div>
			<div class="roster_name"><div class="roster_text"><a href="forums/index.php?/profile/'.$row["user_id"].'-'.$row["name"].'/" class="roster">'.$row["name"].'</a></div></div>
			<div class="roster_rank"><div class="roster_text">'.$row["rank_name"].'</div></div>
			<div class="roster_flag"><div class="roster_text_flag"><img src="assets/images/flag/'.$location.'.png" alt="icon"/></div></div>
			<div class="roster_game">
            <div class="roster_text">
            </div>
			</div>
			<div class="roster_date"><div class="roster_text">'.$row["join_date"].'</div></div>
			<div class="roster_status"><div class="roster_text"><span class="'.$nspan.'">'.$row["activity"].'</span></div></div>
			</div> 
        ';
		echo $loopResult;
		$loopResult ="";
    }
} else {
    echo "Data missing";
}
$conn->close();
?>
    <center><h1>MEMBERS</h1></center>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_members where rank_name not in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial')";
$result = $conn->query($sql);
$loopResult = '';
$location='';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$location=strtolower ($row["location"] );
		$nspan=strtolower ($row["activity"] );
        $loopResult .= ' 
            <div class="roster_wrap">
			<div class="roster_icon"><div class="roster_text"><img src="assets/images/small_icon.png" alt="icon"/></div></div>
			<div class="roster_name"><div class="roster_text"><a href="forums/index.php?/profile/'.$row["user_id"].'-'.$row["name"].'/" class="roster">'.$row["name"].'</a></div></div>
			<div class="roster_rank"><div class="roster_text">'.$row["rank_name"].'</div></div>
			<div class="roster_flag"><div class="roster_text_flag"><img src="assets/images/flag/'.$location.'.png" alt="icon"/></div></div>
			<div class="roster_game">
            <div class="roster_text">
            </div>
			</div>
			<div class="roster_date"><div class="roster_text">'.$row["join_date"].'</div></div>
			<div class="roster_status"><div class="roster_text"><span class="'.$nspan.'">'.$row["activity"].'</span></div></div>
			</div> 
        ';
		echo $loopResult;
		$loopResult ="";
    }
} else {
    echo "Data missing";
}
?>
    <center><h1>WOW MEMBERS</h1></center>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_members where rank_name in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial')";
$result = $conn->query($sql);
$loopResult = '';
$location='';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$location=strtolower ($row["location"] );
		$nspan=strtolower ($row["activity"] );
        $loopResult .= ' 
            <div class="roster_wrap">
			<div class="roster_icon"><div class="roster_text"><img src="assets/images/small_icon.png" alt="icon"/></div></div>
			<div class="roster_name"><div class="roster_text"><a href="forums/index.php?/profile/'.$row["user_id"].'-'.$row["name"].'/" class="roster">'.$row["name"].'</a></div></div>
			<div class="roster_rank"><div class="roster_text">'.$row["rank_name"].'</div></div>
			<div class="roster_flag"><div class="roster_text_flag"><img src="assets/images/flag/'.$location.'.png" alt="icon"/></div></div>
			<div class="roster_game">
            <div class="roster_text">
            </div>
			</div>
			<div class="roster_date"><div class="roster_text">'.$row["join_date"].'</div></div>
			<div class="roster_status"><div class="roster_text"><span class="'.$nspan.'">'.$row["activity"].'</span></div></div>
			</div> 
        ';
		echo $loopResult;
		$loopResult ="";
    }
} else {
    echo "Data missing";
}

$sql = "SELECT count(user_id) as count FROM users_forums";
$result = $conn->query($sql);
$loopResult2 = '';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $loopResult2 .= '           	
        <div class="roster_wrap"> 
        <div class="roster_rank"><div class="roster_text">Total Members: '.$row["count"].'</div></div>
        ';
		echo $loopResult2;
    }
} else {
    echo "Data missing";
}

$conn->close();
?>	
</div>
