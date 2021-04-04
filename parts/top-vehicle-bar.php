<?php $TopVehicles = findTopVehicle($ACCOUNT_VEHICLE);?>
<section class="garage-top" style="padding-top: 80px; color: white; font-size: 14px;">
	<div class="container">		
		
	<div class="text-center">
		<p>Náhodní bitvy</p>
	
		<div class="row">
			
			<div class="col my-auto" >
				<div style="font-size: 18px;">2.</div>	
				<div style="font-size: 18px;"><?php echo $TopVehicles[1]["vehicle_name"]; ?></div>	
				<p></p>
				<a href="#" style="text-decoration : none">
					<img src="<?php echo $TopVehicles[1]["big_image"]; ?>">
				</a>
				<div class="<?php echo barvicka_percent(number_format($TopVehicles[1]["winrate"]));?>" style="padding: 3px 0 3px 0; position: relative; top: -35px;">
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto" style="font-size: 10px;  padding: 0!important;"> W/B </div>
						<div class="col my-auto" style="font-size: 15px;  padding: 0!important;"> TB </div>
						<div class="col my-auto" style="font-size: 10px;  padding: 0!important;"> D/B </div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto " style="font-size: 20px;  padding: 0!important;"> 
							<?php echo number_format($TopVehicles[1]["winrate"], 2,"."," "); ?>%
						</div>
						<div class="col my-auto" style="font-size: 25px;  padding: 0!important;"> 
							<?php echo $TopVehicles[1]["battles"]; ?>
						</div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;"> 
							<?php echo number_format($TopVehicles[1]["damage_per_battles"], 0,"" ," "); ?>
						</div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
				</div>
			</div>
			
			<div class="col my-auto">
				<div style="font-size: 23px;">1.</div>	
				<div style="font-size: 23px;"><?php echo $TopVehicles[0]["vehicle_name"]; ?></div>	
				<p></p>
				<a href="#" style="text-decoration : none">
					<img src="<?php echo $TopVehicles[0]["big_image"]; ?>" width="55%">
				</a>
				<div class="<?php echo barvicka_percent(number_format($TopVehicles[0]["winrate"]));?>" style="padding: 3px 0 3px 0;position: relative; top: -35px;">
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto" style="font-size: 10px; padding: 0!important;">W/B</div>
						<div class="col my-auto" style="font-size: 15px; padding: 0!important;">TB</div>
						<div class="col my-auto" style="font-size: 10px; padding: 0!important;">D/B</div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;">
							<?php echo number_format($TopVehicles[0]["winrate"], 2,"."," "); ?>%
						</div>
						<div class="col my-auto" style="font-size: 25px;  padding: 0!important;">
							<?php echo $TopVehicles[0]["battles"]; ?>
						</div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;">
							<?php echo number_format($TopVehicles[0]["damage_per_battles"], 0,"" ," "); ?>
						</div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
				</div>
				
			</div>
			
			<div class="col my-auto">
				<div style="font-size: 18px;">3.</div>	
				<div style="font-size: 18px;"><?php echo $TopVehicles[2]["vehicle_name"]; ?></div>	
				<p></p>
				<a href="#" style="text-decoration : none">
					<img src="<?php echo $TopVehicles[2]["big_image"]; ?>">
				</a>
				<div class="<?php echo barvicka_percent(number_format($TopVehicles[2]["winrate"]));?>" style="padding: 3px 0 3px 0; position: relative; top: -35px;">
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto" style="font-size: 10px; padding: 0!important;"> W/B </div>
						<div class="col my-auto" style="font-size: 15px; padding: 0!important;"> TB </div>
						<div class="col my-auto" style="font-size: 10px; padding: 0!important;"> D/B </div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;"> 
							<?php echo number_format($TopVehicles[2]["winrate"], 2,"."," "); ?>%
						</div>
						<div class="col my-auto" style="font-size: 25px;  padding: 0!important;"> 
							<?php echo $TopVehicles[2]["battles"]; ?>
						</div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;"> 
							<?php echo number_format($TopVehicles[2]["damage_per_battles"], 0,"" ," "); ?>
						</div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
				</div>
			</div>
			
		</div>
		
		
		<p></p>
		
	</div>

</section>