
<style>

.col {font-family: "Roboto Condensed", Arial, "Helvetica Neue", Helvetica, sans-serif;}
.main-info .col span{font-size: 65px; font-weith: 700;}
.clan-stat .col span{font-size: 30px; font-weith: 700;}
#clan-dashboard {font-weight: bold; color:white;}
</style>


<section class="main-info" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<div class="text-center">
			<div class="row" style="margin-bottom: 25px;">
			
				<div class="col my-auto" style="">
					<div>Aktivních hráčů</div>
					<span><?php echo count($_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['private']['online_members']); ?></span>
				</div>
				
				<div class="col">
					<div style="font-size: 22px;"><?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['name']; ?></div>
					<div style="font-size: 25px; color: <?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['color']; ?>;">[<?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['tag']; ?>]</div>
					<p></p>
					<img src="https://eu.wargaming.net/clans/media/clans/emblems/cl_145/500164145/emblem_195x195.png">
					<p></p>
				</div>
				
				<div class="col my-auto">
					<div>Celkem členu</div>
					<span><?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members_count']; ?></span>
				</div>
				
			</div>
			<!--
			<div class="row">
				<div class="col my-auto">
				</div>
				<div class="col my-auto" style="">
					<div style=" font-size: 14px; ">Zlaťáky</div>
					<div style=" font-size: 16px; ">0 <img src="assets/img/gold.png"></div>
				</div>
				
				<div class="col">
					<div style=" font-size: 15px; font-weith: 700; "> Průmyslové zdroje</div>
					<div style=" font-size: 18px; font-weith: 700; "> 60 696 <img src="assets/img/source.png"></div>
				</div>
				
				<div class="col my-auto">
					<div style=" font-size: 14px; ">Bony </div>
					<div style=" font-size: 16px; ">0 <img src="assets/img/bony.png"></div>
				</div>
				<div class="col my-auto">
				</div>
			</div>
			-->
		</div>
	</div>
</section>

<div class="text-center">
	<img style="position: relative; top: 45px;" src="https://www.pngkey.com/png/full/1007-10072977_world-of-tanks-opening-chest-part-close-icon.png" width="61" height="86">
</div>

<section class="clan-stat" style="padding: 60px 0 40px 0; color: white; font-size: 15px; background-color: #333;">
	<div class="container">		
		
	<div class="text-center">
	
	
		<div class="row">
			<div class="col my-auto">
				<div>Průměr bitev</div>
				<span><?php echo $_SESSION['CLAN_STATISTIC_DATA']['data'][$_SESSION['clan_id']]['battles_count_avg']['value'] ?></span>
			</div>
			<div class="col my-auto">
				<div>Průměrný poměr Vítězství/Bitev</div>
				<span><?php echo $_SESSION['CLAN_STATISTIC_DATA']['data'][$_SESSION['clan_id']]['wins_ratio_avg']['value'] ?>%</span>
			</div>
			<div class="col my-auto" style="font-size: 19px;">
				<div>Hodnocení klanu</div>
				<span style="font-size: 45px;"><?php echo $_SESSION['CLAN_STATISTIC_DATA']['data'][$_SESSION['clan_id']]['efficiency']['value'] ?></span>
			</div>
			<div class="col my-auto">
				<div>Průměr vozidel 10T na hráče</div>
				<span><?php echo $_SESSION['CLAN_STATISTIC_DATA']['data'][$_SESSION['clan_id']]['v10l_avg']['value'] ?></span>
			</div>
			<div class="col my-auto">
				<div>Průměr bitev na hráče</div>
				<span><?php echo $_SESSION['CLAN_STATISTIC_DATA']['data'][$_SESSION['clan_id']]['battles_count_avg_daily']['value'] ?></span>
			</div>
			
		</div>
	</div>

</section>

<section class="poster" style="margin: 80px 0 60px 0; ">
	<div class="container">		
		
	<div class="text-center">
	
	
		<div class="row">
			
			<?php 
			
			for ($i = 0; $i <= 2; $i++){
			
			if ($i <= count($_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']])-1){
			echo '
				<div class="col my-auto dashboard-board-container">
					<a href="clan-board.php" style="text-decoration : none">
						<div style="">'.
						 substr($_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']][$i]['message'],0, 225). "..."
						.'</div>
					</a>
				</div>';
			} else {
				echo '
				<div class="col my-auto dashboard-board-container">
					<a href="clan-board.php" style="text-decoration : none">
						<div style="">
							<div class="text-center">
							Nic tu není
							</div>
						</div>
					</a>
				</div>';
			}			
				
			};
			
			?>
			
			
		</div>
	</div>
	</div>

</section>
<!--
<section class="top-player" style="padding: 30px 0 20px 0; color: white; font-size: 15px;">
			
	<div class="container">				
		<div class="text-center">
		<div style=" font-size: 20px; font-family: 'Roboto Condensed', Arial, 'Helvetica Neue', Helvetica, sans-serif;">Nejlepší hrači CSSTB</div>
		<p></p>
			<div class="row">
				
				
				
				<div class="col my-auto" style="color: #aaaaab">
					<div class="" style="">
						<div style="font-size: 15px;">2.</div>
						<div style="font-size: 20px;">
						Phanatar
						</div>
						<p></p>
						<i class="fas fa-user-alt" style="font-size:62px; color: rgba(255,255,255,0.4)"></i>
						
						<div class="top-player-banner" style="font-size: 14px;">
							<div class="row">
								<div class="col my-auto" style="">
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-flag"></i>
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-star"></i>
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-play"></i>
								</div>
								<div class="col my-auto" style="">
								</div>
							</div>
							<div class="row">
								
								<div class="col my-auto" style="">
								</div>
								<div class="col my-auto" style="">
									54,20%
								</div>
								<div class="col my-auto" style="font-size:18px;">
									4.829
								</div>
								<div class="col my-auto" style="">
									10.084
								</div>
								<div class="col my-auto" style="">
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col my-auto" style="color: #fab81b">
					<div class="" style="">
						<div style="font-size: 17px;">1.</div>
						<div style="font-size: 22px;">
						jopacek
						</div>
						<p></p>
						<i class="fas fa-user-alt" style="font-size:82px; color: rgba(255,255,255,0.4)"></i>
						
						<div class="top-player-banner" style="">
							<div class="row">
								<div class="col my-auto" style="">
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-flag"></i>
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-star"></i>
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-play" title="Celkový počet bitev"></i>
								</div>
								<div class="col my-auto" style="">
								</div>
							</div>
							<div class="row">
								
								<div class="col my-auto" style="">
								</div>
								<div class="col my-auto" style="">
									49,05%
								</div>
								<div class="col my-auto" style="font-size:20px;">
									5.480
								</div>
								<div class="col my-auto" style="">
									58.202
								</div>
								<div class="col my-auto" style="">
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col my-auto" style="color: #ff7e00">
					<div class="" style="">
						<div style="font-size: 15px;">3.</div>
						<div style="font-size: 20px;">
						michlak123
						</div>
						<p></p>
						<i class="fas fa-user-alt" style="font-size:62px; color: rgba(255,255,255,0.4)"></i>
						
						<div class="top-player-banner" style="">
							<div class="row">
								<div class="col my-auto" style="">
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-flag"></i>
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-star"></i>
								</div>
								<div class="col my-auto" style="">
									<i class="fas fa-play"></i>
								</div>
								<div class="col my-auto" style="">
								</div>
							</div>
							<div class="row">
								
								<div class="col my-auto" style="">
								</div>
								<div class="col my-auto" style="">
									50,18%
								</div>
								<div class="col my-auto" style="font-size:18px;">
									4.527
								</div>
								<div class="col my-auto" style="">
									17.068	
								</div>
								<div class="col my-auto" style="">
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
				
			</div>
		</div>
	</div>
</section>
<section class="dashboard-event" style="margin: 80px 0 60px 0; ">
	<div class="container">		

		<div class="dashboard-event-title">
			Klanový eventy
		</div>
			
		<div class="dashboard-event-content">
			Žadný event se nekoná
		</div>
			

</section>
-->


