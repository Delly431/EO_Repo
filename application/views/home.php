<main class="flex">
  <section class="content flex">
    <div class="welcome flex">
      <div class="landing-logo icn flex-item"></div>
      <div class="landing-text flex-item">
        <h1 class="welcome-message">
          <span>Welcome To The</span>
          <span>Exiled Order</span>
        </h1>
      <a class="register-button button" href="http://exiledorder.com/forums/index.php?/register/"><span class="button-text">REGISTER</span></a></div>
    </div>
  </section>
  <aside class="newsfeed">
  <div class="newsfeed_box"><div class="newsfeed_text"><b>Recent Announcements</b></div></div>
  <?php
  include "database.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eosquad_forums.forums_topics where forum_id = 6 order by start_date desc limit 5";
$result = $conn->query($sql);
$loopResult = '';
$location='';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$link=strtolower ($row["title"] );
		$link = preg_replace("/[^a-z0-9_\s-]/", "", $link);
        //Clean up multiple dashes or whitespaces
        $link = preg_replace("/[\s-]+/", " ", $link);
        //Convert whitespaces and underscore to dash
        $link = preg_replace("/[\s_]/", "-", $link);
        $loopResult .= '
		<div class="newsfeed_box"><div class="roster_rank"><div class="newsfeed_text"><a href="forums/index.php?/topic/'.$row["tid"].'-'.$link.'/" class="newsfeed_text">'.$row["title"].'</a></div></div></div>
        ';
		echo $loopResult;
		$loopResult ="";
    }
} else {
    echo "Data missing";
}
?>
</aside>
  </main>
  <div class="video-cover">
    <div class="video-cover-inner hide-iframe" data-role="video_cover_inner">
      <div class="top"></div>
      <div class= "bg-video" id="ytplayer" data-role="video"></div>
      <div class= "bg-image"></div>
    </div>
  </div>
