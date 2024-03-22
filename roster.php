<style>
body {
    background-image: url("assets/images/EO%20Background%202.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>
<center>
<img src="assets/images/roster_banner.png" alt="roster"/>
<div id="roster_disp">
	<center><h1><img src="assets/images/Roster.png" alt="Staff"/></h1></center>

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
		<div class="roster_date"><div class="roster_text">REJOIN DATE</div></div>
		<div class="roster_date2"><div class="roster_text">PROMOTION DATE</div></div>
		<div class="roster_status"><div class="roster_text"><span class="'.$nspan.'">ACTIVITY</span></div></div>
	</div>
<?php
include "database.php";
iconv_set_encoding('internal_encoding', 'UTF-8');
mb_internal_encoding('UTF-8');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2="select group_name, avg(Case when group_name = 'LOA' or group_name = 'Inactive' then 100 else hi_id end) as gorder from eo_roster.users_forums group by group_name order by gorder ASC";
$result2 = $conn->query($sql2);
$loopResultg = '';
$group_name = '';
while($row2 = $result2->fetch_assoc()) {
	$group_name = $row2["group_name"];
	$loopResultg = '
	<div class="roster_wrap">
	<div style="float:left;color:#c0a131;text-align:center;font-weight: bold;font-size: 24px;padding-left: 10px;"> '.$row2["group_name"].'</div>
	</div>
	';
	echo $loopResultg;
	$loopResultg ="";
	$sql="
	select user_id,a.name,rank_name,activity,location,CONVERT(g.hi_id, SIGNED INTEGER) as hid, FROM_UNIXTIME(join_date+86400,'%m-%d-%Y') as join_date, FROM_UNIXTIME(rejoin_date+86400,'%m-%d-%Y') as rejoin_date, FROM_UNIXTIME(promotion_date+86400,'%m-%d-%Y') as promotion_date 
	from eo_roster.users_forums a
		LEFT JOIN
		(select rank_id, name, hi_id from eo_roster.ranks) g
		on SUBSTRING_INDEX(SUBSTRING_INDEX(a.rank_name, ',', 1), ',', -1) = g.rank_id 
        OR SUBSTRING_INDEX(SUBSTRING_INDEX(a.rank_name, ',', 2), ',', -1) = g.rank_id 
        OR SUBSTRING_INDEX(SUBSTRING_INDEX(a.rank_name, ',', 3), ',', -1) = g.rank_id 
        OR SUBSTRING_INDEX(SUBSTRING_INDEX(a.rank_name, ',', 4), ',', -1) = g.rank_id 
	WHERE group_name = '".$row2["group_name"]."'
	ORDER BY  cast(hi_id as SIGNED) ASC,join_date+86400 ASC";
	$order = hi_id;
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
					<div class="roster_icon"><div class="roster_text"><center><img src="assets/images/roster/'.$row["rank_name"].'.png" alt="icon" style="margin-Top:-5px"/></center></div></div>
					<div class="roster_name"><div class="roster_text"><a href="forums/index.php?/profile/'.$row["user_id"].'-'.$row["name"].'/" class="roster">'.$row["name"].'</a></div></div>
					<div class="roster_rank"><div class="roster_text">'.$row["rank_name"].'</div></div>
					<div class="roster_flag"><div class="roster_text_flag"><img src="assets/images/flag/'.$location.'.png" alt="icon"/></div></div>
					<div class="roster_game">
					<div class="roster_text">
					</div>
					</div>
					<div class="roster_date"><div class="roster_text">'.$row["join_date"].'</div></div>
					<div class="roster_date"><div class="roster_text">'.$row["rejoin_date"].'</div></div>
					<div class="roster_date2"><div class="roster_text">'.$row["promotion_date"].'</div></div>
					<div class="roster_status"><div class="roster_text"><span class="'.$nspan.'">'.$row["activity"].'</span></div></div>
					</div>
				';
				echo $loopResult;
				$loopResult ="";
			}
	} else {
		echo "Data missing";
	}
}
$conn->close();

?>

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT count(user_id) as count FROM users_forums";
$result = $conn->query($sql);
$loopResult3 = '';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $loopResult3 .= '
        <div class="roster_wrap">
        <div class="roster_rank"><div class="roster_text">Total Members: '.$row["count"].'</div></div>
        ';
		echo $loopResult3;
    }
} else {
    echo "Data missing";
}

$conn->close();
?>

</div>
