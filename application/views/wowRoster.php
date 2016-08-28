<div>
<?php
			include "database.php";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$conn->query('SET NAMES utf8');
			$sql = "select a.user_id, a.name, c.name as rank_name, c.hi_id,field_8 from (  SELECT r.*,d.field_8,  case when b.mgroup_others like '%17%' and rank_name not in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial') then 17  when b.mgroup_others like '%18%' and rank_name not in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial') then 18  when b.mgroup_others like '%36%' and rank_name not in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial') then 36  when b.mgroup_others like '%37%' and rank_name not in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial') then 37  when b.mgroup_others like '%38%' and rank_name not in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial') then 38  when b.mgroup_others like '%39%' and rank_name not in ('GM', 'Officer','Core Raider', 'Raider', 'Casual Member', 'Trial') then 39  else c.rank_id end as other_rank  FROM eo_roster.users_forums r  join eosquad_forums.core_pfields_content d on d.member_id = r.user_id  join eosquad_forums.core_members b on b.member_id = r.user_id  join eo_roster.ranks c on r.rank_name = c.name  where field_8 is not null   and field_8 !='') a  join eo_roster.ranks c on a.other_rank = c.rank_id  order by c.hi_id;";
			$result = $conn->query($sql);
			$loopResult = '';
			$location='';
			$level='';
			$ilevel='';
			
			$Herbalism=0;
			$Alchemy=0;
			$Inscription=	0;
			$Blacksmithing=0;
			$Engineering=0;
			$Mining=0;
			$Jewelcrafting=0;
			$Skinning=0;
			$Leatherworking=0;
			$Tailoring=0;
			$Enchanting=0;
			
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {

				
				$json = file_get_contents('https://us.api.battle.net/wow/character/sargeras/'.$row["field_8"].'?fields=items,talents,professions&locale=en_US&apikey=m3zphnqt343w6cdbfjkwfv9gnqy2esmd');// make general
				$obj = json_decode($json, true);
				
				$level = $obj["level"];
				$ilevel = $obj["items"]["averageItemLevel"];
				$spec = $obj["talents"][0]["spec"]["name"];
				$class = $obj["class"];
				$pro1 = $obj["professions"]["primary"][0]["name"];
				$pro2 = $obj["professions"]["primary"][1]["name"];
				$thumb=$obj["thumbnail"];
				$thumb=str_replace("avatar.jpg","profilemain.jpg",$obj["thumbnail"],$thumb);
				$thumblink="http://render-api-us.worldofwarcraft.com/static-render/us/".$thumb;				
								
				
					$loopResult .= ' 
						<div class="wow_roster_wrap">
						<div class="roster_icon"><div class="roster_text"><img src="assets/images/wow/'.$class.'-'.$spec.'.png" alt="icon" height="22" width="22"" /></div></div>
						<div class="wow_roster_name"><div class="roster_text"><a href="forums/index.php?/profile/'.$row["user_id"].'-'.$row["name"].'/" class="roster">'.$row["name"].'</a></div></div>
						<div class="wow_roster_rank"><div class="roster_text">'.$row["rank_name"].'</div></div>
						<div id="'.$row["field_8"].'" class="wow_roster_char"><div class="roster_text">'.$row["field_8"].'</div></div>
						<div class="wow_roster_lvl"><div class="roster_text">LVL '.$level.' - '.$ilevel.'</div></div>
						</div>  
						<script>
							$("#'.$row["field_8"].'").click(function() {
								$("#character").empty();
								$("#character").append(\' <div  style="height: 410px"><div class="roster_icon"><div class="roster_text"><img src="assets/images/wow/'.$class.'-'.$spec.'.png" alt="icon"  height=150% width=150%/></div></div><div class="wow_roster_name"><div class="roster_text">'.$row["field_8"].'<br>LVL '.$level.' - '.$ilevel.'</div></div>  <div style="color : #c0a131; float: right;"><div class="roster_text">User Name: <a href="forums/index.php?/profile/'.$row["user_id"].'-'.$row["name"].'/" class="roster">'.$row["name"].'</a><br>Rank: '.$row["rank_name"].' <br> </div></div> <div  style="background: url('.$thumblink.'); background-position: center; height: 430px;width : 375px"></div> </div>\');
							});
						</script>
					';
						
					if($pro1=="Herbalism" or $pro2=="Herbalism" )
						$Herbalism++;
					if($pro1=="Alchemy" or $pro2=="Alchemy")
						$Alchemy++;
					if($pro1=="Inscription" or $pro2=="Inscription")
						$Inscription++;
					if($pro1=="Blacksmithing" or $pro2=="Blacksmithing")
						$Blacksmithing++;
					if($pro1=="Engineering" or $pro2=="Engineering")
						$Engineering++;
					if($pro1=="Mining" or $pro2=="Mining")
						$Mining++;
					if($pro1=="Jewelcrafting" or $pro2=="Jewelcrafting")
						$Jewelcrafting++;
					if($pro1=="Skinning" or $pro2=="Skinning")
						$Skinning++;
					if($pro1=="Leatherworking" or $pro2=="Leatherworking")
						$Leatherworking++;
					if($pro1=="Tailoring" or $pro2=="Tailoring")
						$Tailoring++;
					if($pro1=="Enchanting" or $pro2=="Enchanting")
						$Enchanting++;
					
					echo $loopResult;
					$loopResult ="";	
				}
				// do stuff to display professions
				echo'<script> function clearBox(elementID,count){document.getElementById(elementID).innerHTML = count;}
				</script>
					<script>
						clearBox("alc",'.$Alchemy.');   
						clearBox("her",'.$Herbalism.');   
						clearBox("bla",'.$Blacksmithing.');   
						clearBox("min",'.$Mining.');   
						clearBox("enc",'.$Enchanting.');   
						clearBox("ski",'.$Skinning.');   
						clearBox("eng",'.$Engineering.');   
						clearBox("tai",'.$Tailoring.');   
						clearBox("ins",'.$Inscription.'); 
						clearBox("jew",'.$Jewelcrafting.');   
						clearBox("lea",'.$Leatherworking.');				
					</script>';
			} else {
				echo "Data missing";
			}

			$conn->close();
?>
</div>