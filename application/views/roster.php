<center>
<img src="assets/images/roster_banner.png" alt="roster"/>
<div id="roster_disp">
	<center><h1>LEADERS & FOUNDERS</h1></center>
<?php
include "database.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_leaders";
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
    <center><h1>OPERATIONS</h1></center>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_operations";
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
$conn->close();
?>

	<center><h1>LOGISTICS SECTOR</h1></center>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_logistics";
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
$conn->close();
?>
	<center><h1>LEGAL DEPARTMENT</h1></center>	
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_legal";
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
$conn->close();
?>	
    <center><h1>GAME SECTION MEMBERS</h1></center>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eo_roster.roster_gs_squad";
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
            <img src="assets/images/game_squad.png" alt="game" />
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
