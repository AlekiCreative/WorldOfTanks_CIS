<?php include "config/get_data_private.php";?>

<section class="main-info" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<div class="text-center">
			<div class="row" style="margin-bottom: 25px;">
			
				<div class="col my-auto" style="">
					
				</div>
				
				<div class="col">
					<img src="<?php echo $CLAN_DATA_EMBLEM["x64"]["portal"]; ?>" width="100px" height="100px">
					<div style="font-size: 23px; color: <?php echo $CLAN_DATA[16]; ?>;">[<?php echo $CLAN_DATA[15]; ?>]</div>
					<p></p>
					<div style="font-size: 34px;"> <?php echo $ACCOUNT_DATA[3]; ?><span style="font-size: 20px; color: gray;">#<?php echo $ACCOUNT_DATA[1]; ?></span></div>
					<div style="font-size: 12px;">Učet založen: <?php echo date("d. m. Y, H:i", intval($ACCOUNT_DATA[13])); ?>h</div>
					
					<p></p>
				</div>
				
				<div class="col my-auto">
					
				</div>
				
			</div>
			<?php if($validity_token){
				include "parts/private/economic-row.php"; 
			} ?>			

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
				<div>Celkem bitev</div>
				<span><?php echo number_format($ACCOUNT_RANDOM["battles"], 0,"" ," "); ?></span>
			</div>
			<div class="col my-auto">
				<div>Ø poškození</div>
				<span><?php echo number_format($ACCOUNT_RANDOM['damage_dealt']/$ACCOUNT_RANDOM['battles'], 2,","," "); ?></span>
			</div>
			<div class="col my-auto" style="font-size: 19px;">
				<div>Osobní hodnocení</div>
				<span style="font-size: 45px;"><?php echo number_format($ACCOUNT_DATA[8], 0,"" ," "); ?></span>
			</div>
			<div class="col my-auto">
				<div>Ø zkušenosti za bitvu</div>
				<span><?php echo $ACCOUNT_RANDOM['battle_avg_xp']; ?></span>
			</div>
			<div class="col my-auto">
				<div>Vítězství</div>
				<span><?php echo number_format($ACCOUNT_RANDOM['winrate'], 2,","," "); ?>%</span>
			</div>
			
			
		</div>
	</div>

</section>

<?php include "parts/top-vehicle-bar.php"; ?>

<section>
	<div class="text-center">
		<div class="garage-btn" style="padding: 15px 0 55px 0;">
			<a href="player-garage.php" style="color: #f25322">Zobrazit garáž</a>
		</div>
	</div>
</section>

<section class="personal-archievements" style="padding: 30px 0 20px 0; color: white; font-size: 15px;">
			
	<div class="container">				
		<div class="text-center">
			<div class="row">
				<div class="col my-auto">
				</div>
				
				
				<?php
				//$keys = array_keys($_SESSION['ACHIEVEMENTS_DATA']['data'][$_SESSION['account_id']]['achievements']);
				$ARR_KEY_ARCHIEVEMENTS = array_keys($ACCOUNT_ARCHIEVEMENTS);

				$a = 6;
				for ($i = 0; $i <= $a; $i++){
					
					if ($ACCOUNT_ARCHIEVEMENTS[$ARR_KEY_ARCHIEVEMENTS[$i]]["image"] != null){
						echo "
						<div class='col my-auto'>
							<img src=".$ACCOUNT_ARCHIEVEMENTS[$ARR_KEY_ARCHIEVEMENTS[$i]]["image"].">
						</div>";
					} else {
						$a++;
					}
					
				}
				?>
				<div class="col my-auto">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="all-stat" style="padding: 60px 0 60px 0; color: white; font-size: 15px;">
    <div class="container">
		<div class="text-center">
			<div class="row">
				<div class="col " style="text-align: left;">
					<h4 style="padding-bottom: 15px;">Celkové skóre</h4>
					<div class="row">
						<div class="col my-auto">
							Bitvy
						</div>
						<div class="col my-auto">
							<?php echo number_format($ACCOUNT_RANDOM['battles'], 0,"" ," "); ?>
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Vítězství
						</div>
						<div class="col my-auto <?php echo barvicka_percent($ACCOUNT_RANDOM['winrate']);?>" style="">
							<?php echo number_format($ACCOUNT_RANDOM['winrate'], 2,","," "); ?>%
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
						.	
						</div>
						<div class="col my-auto">
						.	
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Průměrná poškození
						</div>
						<div class="col my-auto">
							<?php echo number_format($ACCOUNT_RANDOM['avgDmg'], 2,","," "); ?>
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Průměrné zkušenosti
						</div>
						<div class="col my-auto">
							<?php echo $ACCOUNT_RANDOM['battle_avg_xp']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							.
						</div>
						<div class="col my-auto">
							.
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Osobní hodnocení
						</div>
						<div class="col my-auto">
							<?php echo number_format($ACCOUNT_DATA[8], 0,"" ," "); ?>
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
						.	
						</div>
						<div class="col my-auto">
						.	
						</div>
					</div>
					<!--
					<div class="row" style="padding: 10px 0 5px 0">
						<div class="col my-auto">
							WN7
						</div>
						<div class="col my-auto" style="">
							0	
						</div>
					</div>
					-->
					<div class="row" style="padding: 5px 0 10px 0">
						<div class="col my-auto">
							WN8
						</div>
						<div class="col my-auto <?php echo barvicka_wn8(number_format($ACCOUNT_RANDOM['WN8']),0, ".","");?>" style="">
							<?php echo number_format($ACCOUNT_RANDOM['WN8'], 2,","," "); ?>
						</div>
					</div>
				</div>
				
				<div class="col " style="text-align: left;">
					<h4 style="padding-bottom: 15px;">Za 7 dnů</h4>
					<?php if($_SESSION['history_week'] == "true"){echo '		
					<div class="row">
						<div class="col my-auto">
							Bitvy
						</div>
						<div class="col my-auto">
							9 356
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Vítězství
						</div>
						<div class="col my-auto podprumerne" style="">
							45,50%
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
						.	
						</div>
						<div class="col my-auto">
						.	
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Průměrná poškození
						</div>
						<div class="col my-auto">
							483,54
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Průměrné zkušenosti
						</div>
						<div class="col my-auto">
							356,59
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							.
						</div>
						<div class="col my-auto">
							.
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Osobní hodnocení
						</div>
						<div class="col my-auto">
							3 166
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
						.	
						</div>
						<div class="col my-auto">
						.	
						</div>
					</div>
					<div class="row" style="padding: 10px 0 5px 0">
						<div class="col my-auto">
							WN7
						</div>
						<div class="col my-auto prumerne" style="">
							553,90	
						</div>
					</div>
					<div class="row" style="padding: 5px 0 10px 0">
						<div class="col my-auto">
							WN8
						</div>
						<div class="col my-auto dobre" style="">
							542,62	
						</div>
					</div>
					
					
					
					
				';}else{echo 'no data';}?>
				</div>
				
				<div class="col" style="text-align: left;">
					<h4 style="padding-bottom: 15px;">Za 28 dnů</h4>
					<?php if($_SESSION['history_month'] == "true"){echo '
					<div class="row">
						<div class="col my-auto">
							Bitvy
						</div>
						<div class="col my-auto">
							9 356
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Vítězství
						</div>
						<div class="col my-auto velmi-dobre" style="">
							45,50%
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
						.	
						</div>
						<div class="col my-auto">
						.	
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Průměrná poškození
						</div>
						<div class="col my-auto">
							483,54
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Průměrné zkušenosti
						</div>
						<div class="col my-auto">
							356,59
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							.
						</div>
						<div class="col my-auto">
							.
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Osobní hodnocení
						</div>
						<div class="col my-auto">
							3 166
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
						.	
						</div>
						<div class="col my-auto">
						.	
						</div>
					</div>
					<div class="row" style="padding: 10px 0 5px 0">
						<div class="col my-auto">
							WN7
						</div>
						<div class="col my-auto vyborne" style="">
							553,90	
						</div>
					</div>
					<div class="row" style="padding: 5px 0 10px 0">
						<div class="col my-auto" >
							WN8
						</div>
						<div class="col my-auto unikatni" style="">
							542,62	
						</div>
					</div>
					
					
					
					
				';}else{echo 'no data';}?>
				</div>
				
			</div>
		</div>
    </div>
</section>

