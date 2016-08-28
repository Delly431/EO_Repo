<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		$(function() {
			$('#wowroster').load("application/views/wowRoster.php");
		});
	</script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<style>
table, td, th {
    border: 1px solid #c0a131;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th{
    padding: 13px;
	color : #ffe894;
}

 td {
    padding: 13px;
	color : #c0a131;
}
</style>

<div id="wow_container">

	<div id="wow_left">
		<img src="assets/images/GuildMember.png" alt="Guild Members"/>
	<div id="wowroster">
		<div class="loader" style="text-align: center;"></div>
	</div>
	</div>
	
  <div id="wow_center">
	<div style="height: 410px;color : #c0a131;">	
		<div class="wow_prev">
			<img src="assets/images/wow/Preview.png" alt="Preview"/>	
			<div id="character"  style="height: 410px;color : #c0a131;">
				Click on a users character name (third column) to see more.<br>
				<img src="assets/images/wow/wowlogo.png" alt="wowlogo" height=50% width=50%/>
				<br><br><br>
				<a class="register-button button" href="http://exiledorder.com/forums/index.php?/forms/9-exiled-order-wow-guild-application-form/"><span class="button-text">Register For WoW</span></a>	
			</div>
			<div style="float:right">
				<a id="clear-button"class="register-button button" ><span class="button-text" >Clear</span></a>
			</div>
			<script>
				$('#clear-button').click(function() {
					$('#character').empty();
					$('#character').append('Click on a users character name (third column) to see more.<br><img src="assets/images/wow/wowlogo.png" alt="wowlogo" height=50% width=50%/><br><br><br><a class="register-button button" href="http://exiledorder.com/forums/index.php?/forms/9-exiled-order-wow-guild-application-form/"><span class="button-text">Register For WoW</span></a>');
				});
			</script>
		</div>
		Page content is connected to Blizzard and WoW services, If an error occurs please refresh the page or try again later. This page is still considered WIP, suggestions welcome on forums.	
	</div>
  </div>
  
  <div id="wow_right">
		<div class="wow_prog">
		<img src="assets/images/wow/Progression.png" alt="Progression"/>
		<div style="background: url('assets/images/wow/NH Prog.png'),url('assets/images/wow/EN Prog.png') ; background-size: 400px 195px; padding-left:35px; background-origin: content-box; background-repeat: no-repeat,repeat-y;  height: 390px; width: 400px; " >
			<div style="height: 200px;"><br>
				<div style="color:#ffe894"><b>The Night Hold</b></div>	<br>
				<div style="color:#009933"><b>Normal 0/7</b></div><br>	
				<div style="color:#ff9900"><b>Heroic 0/7</b></div><br>	
				<div style="color:#0099cc"><b>Mythic 0/7</b></div>	
			</div>
			<div style="height: 200px;"><br>
				<div style="color:#ffe894"><b>The Emerald Nightmare</b></div><br>
				<div style="color:#009933"><b>Normal 0/10</b></div><br>
				<div style="color:#ff9900"><b>Heroic 0/10</b></div><br>
				<div style="color:#0099cc"><b>Mythic 0/10</b></div>				
			</div>
		</div>
		</div>
		<br>
		
		<div class="wow_prof">
		<img src="assets/images/wow/Professions.png" alt="Professions"/>
		<div id="pro">
			<table>
			<tr><th>Crafting</th><th>Count</th><th>Gathering</th><th>Count</th>
			</tr><tr><td>Alchemy</td><td id="alc"></td>
			<td>Herbalism</td><td id="her"></td></tr>
			<tr><td>Blacksmithing</td><td id="bla"></td>
			<td>Mining</td><td id="min"></td></tr>
			<tr><td>Enchanting</td><td id="enc"></td>
			<td>Skinning</td><td id="ski"></td></tr>
			<tr><td>Engineering</td><td id="eng"></td>
			<td>Tailoring</td><td id="tai"></td></tr>
			<tr><td>Inscription</td><td id="ins"></td>
			</tr><tr><td>Jewelcrafting</td><td id="jew"></td></tr>
			<tr><td>Leatherworking</td><td id="lea"></td></tr>
			</table>
		</div>
		</div>
  </div>
</div>