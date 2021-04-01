<?php include "config/get_data_private.php";?>


<style>

.col {font-family: "Roboto Condensed", Arial, "Helvetica Neue", Helvetica, sans-serif;}
.main-info .col span{font-size: 65px; font-weith: 700;}
.clan-stat .col span{font-size: 30px; font-weith: 700;}
#clan-dashboard a {font-weight: bold; color:white;}
</style>


<section class="main-info" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<div class="text-center">
			<div class="row" style="margin-bottom: 25px;">
			
				<div class="col my-auto" style="">
					<div>Aktivních hráčů</div>
					<span><?php if($validity_token){
							echo count($CLAN_DATA_PRIVATE['data'][$CLAN_DATA[1]]['private']['online_members']);
						} ?>
				</div>
				
				<div class="col">
					<div style="font-size: 22px;"><?php echo $CLAN_DATA[14]; ?></div>
					<div style="font-size: 25px; color: <?php echo $CLAN_DATA[16]; ?>;">[<?php echo $CLAN_DATA[15]; ?>]</div>
					<p></p>
					<img src="<?php echo $CLAN_DATA_EMBLEM["x195"]["portal"]; ?>">
					<p></p>
				</div>
				
				<div class="col my-auto">
					<div>Celkem členu</div>
					<span><?php echo $CLAN_DATA[8]; ?></span>
				</div>
				
			</div>
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
				<span><?php echo $CLAN_DATA[10]; ?></span>
			</div>
			<div class="col my-auto">
				<div>Průměrný poměr Vítězství/Bitev</div>
				<span><?php echo $CLAN_DATA[11]; ?>%</span>
			</div>
			<div class="col my-auto" style="font-size: 19px;">
				<div>Hodnocení klanu</div>
				<span style="font-size: 45px;"><?php echo $CLAN_DATA[9]; ?></span>
			</div>
			<div class="col my-auto">
				<div>Průměr vozidel 10T na hráče</div>
				<span><?php echo $CLAN_DATA[13]; ?></span>
			</div>
			<div class="col my-auto">
				<div>Průměrný počet bitev za den</div>
				<span><?php echo $CLAN_DATA[12] ?></span>
			</div>
			
		</div>
	</div>

</section>
<?php if($validity_token){
 	include "parts/private/board.php";
} ?>
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


