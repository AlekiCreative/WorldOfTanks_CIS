<section class="garage-top" style="padding-top: 80px; color: white; font-size: 14px;">
	<div class="container">		
		
	<div class="text-center">
	
	
		<div class="row">
			
			<div class="col my-auto" >
				<div style="font-size: 18px;">2.</div>	
				<div style="font-size: 18px;"><?php echo getVehiclesName(returnTopVehicle(2,"tank_id")); ?></div>	
				<p></p>
				<a href="#" style="text-decoration : none">
					<img src="<?php echo getVehiclesPhoto(returnTopVehicle(2,"tank_id")); ?>">
				</a>
				<div class="" style="padding: 3px 0 3px 0; position: relative; top: -35px; border-left: 2px green solid; background-image: linear-gradient(to right,rgba(102,175,76,.23) 0%,transparent 63%); ">
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto" style="font-size: 10px;  padding: 0!important;"> W/B </div>
						<div class="col my-auto" style="font-size: 15px;  padding: 0!important;"> TB </div>
						<div class="col my-auto" style="font-size: 10px;  padding: 0!important;"> D/B </div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
					<div class="row">
						<div class="col my-auto" style="padding: 0!important;"></div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;"> 
							<?php echo number_format(returnTopVehicle(2,"winrate"), 2,"."," "); ?>%
						</div>
						<div class="col my-auto" style="font-size: 25px;  padding: 0!important;"> 
							<?php echo returnTopVehicle(2,"battles"); ?>
						</div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;"> 
							<?php echo number_format(returnTopVehicle(2,"damage_per_battles"), 0,"" ," "); ?>
						</div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
				</div>
			</div>
			
			<div class="col my-auto">
				<div style="font-size: 23px;">1.</div>	
				<div style="font-size: 23px;"><?php echo getVehiclesName(returnTopVehicle(1,"tank_id")); ?></div>	
				<p></p>
				<a href="#" style="text-decoration : none">
					<img src="<?php echo getVehiclesPhoto(returnTopVehicle(1,"tank_id")); ?>" width="60%" height="60%">
				</a>
				<div class="" style="padding: 3px 0 3px 0;position: relative; top: -35px; border-left: 2px green solid; background-image: linear-gradient(to right,rgba(102,175,76,.23) 0%,transparent 63%); ">
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
							<?php echo number_format(returnTopVehicle(1,"winrate"), 2,"."," "); ?>%
						</div>
						<div class="col my-auto" style="font-size: 25px;  padding: 0!important;">
							<?php echo returnTopVehicle(1,"battles"); ?>
						</div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;">
							<?php echo number_format(returnTopVehicle(1,"damage_per_battles"), 0,"" ," "); ?>
						</div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
				</div>
				
			</div>
			
			<div class="col my-auto">
				<div style="font-size: 18px;">3.</div>	
				<div style="font-size: 18px;"><?php echo getVehiclesName(returnTopVehicle(3,"tank_id")); ?></div>	
				<p></p>
				<a href="#" style="text-decoration : none">
					<img src="<?php echo getVehiclesPhoto(returnTopVehicle(3,"tank_id")); ?>">
				</a>
				<div class="" style="padding: 3px 0 3px 0; position: relative; top: -35px; border-left: 2px green solid; background-image: linear-gradient(to right,rgba(102,175,76,.23) 0%,transparent 63%); ">
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
							<?php echo number_format(returnTopVehicle(3,"winrate"), 2,"."," "); ?>%
						</div>
						<div class="col my-auto" style="font-size: 25px;  padding: 0!important;"> 
							<?php echo returnTopVehicle(3,"battles"); ?>
						</div>
						<div class="col my-auto" style="font-size: 20px;  padding: 0!important;"> 
							<?php echo number_format(returnTopVehicle(3,"damage_per_battles"), 0,"" ," "); ?>
						</div>
						<div class="col my-auto" style="padding: 0!important;"></div>
					</div>
				</div>
			</div>
			
		</div>
		
		
		<p></p>
		
	</div>

</section>