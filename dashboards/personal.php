
<section class="main-info" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<div class="text-center">
			<div class="row" style="margin-bottom: 25px;">
			
				<div class="col my-auto" style="">
					<div>WN7</div>
					<span class="<?php echo barvicka_wn7(number_format(wn7(6.43,$_SESSION['damage_per_battle'],$_SESSION['spotted']/$_SESSION['battles'],$_SESSION['avg_def'],$_SESSION['percent_win'],$_SESSION['battles'],$_SESSION['avg_def']),0, ".",""));?>">
					
						<?php echo number_format(wn7(6.43,$_SESSION['damage_per_battle'],$_SESSION['spotted']/$_SESSION['battles'],$_SESSION['avg_def'],$_SESSION['percent_win'],$_SESSION['battles'],$_SESSION['avg_def']), 2,","," ");?>
					
					</span>
				</div>
				
				<div class="col">
					<img src="<?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['emblems']['x195']['portal']; ?>" width="100px" height="100px">
					<div style="font-size: 23px; color: #800000;">[<?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['tag']; ?>]</div>
					<p></p>
					<div style="font-size: 34px;"> <?php echo $_SESSION['nickname']; ?></div>
					<div style="font-size: 12px;">Učet založen: <?php echo date("d. m. Y, H:i", $_SESSION['created_at']); ?>h</div>
					
					<p></p>
				</div>
				
				<div class="col my-auto">
					<div>WN8</div>
					<span class="<?php echo barvicka_wn8(number_format(wn8($_SESSION['damage_per_battle'],$_SESSION['avg_damage_assisted'],$_SESSION['avg_frags'],$_SESSION['avg_def'],$_SESSION['percent_win'])),0, ".","");?>">
						<?php echo number_format(wn8($_SESSION['damage_per_battle'],$_SESSION['avg_damage_assisted'],$_SESSION['avg_frags'],$_SESSION['avg_def'],$_SESSION['percent_win']), 2,","," "); ?>
					</span>
				</div>
				
			</div>
			<div class="row">
				<div class="col my-auto">
				</div>
				<div class="col my-auto">
					<div style=" font-size: 14px; ">Dny Premium </div>
					<div style=" font-size: 16px; ">0 <img src="assets/img/premium.png" width="15px" height="13px"></div>
				</div>
				<div class="col my-auto" style="">
					<div style=" font-size: 14px; ">Zlaťáky</div>
					<div style=" font-size: 16px; "><?php echo number_format($_SESSION['gold'], 0,"" ," "); ?> <img src="assets/img/gold.png" width="13" height="11"></div>
				</div>
				
				<div class="col">
					<div style=" font-size: 15px; font-weith: 700; "> Kredity</div>
					<div style=" font-size: 18px; font-weith: 700; "> <?php echo number_format($_SESSION['credits'], 0,"" ," "); ?> <img src="assets/img/credit.png" width="13" height="11"></div>
				</div>
				
				<div class="col my-auto">
					<div style=" font-size: 14px; ">Bony </div>
					<div style=" font-size: 16px; "><?php echo number_format($_SESSION['bonds'], 0,"" ," "); ?> <img src="assets/img/bony.png" width="13" height="11"></div>
				</div>
				<div class="col my-auto">
					<div style=" font-size: 14px; ">Volný XP </div>
					<div style=" font-size: 16px; "><?php echo number_format($_SESSION['free_xp'], 0,"" ," "); ?><img src="assets/img/xp.png" width="15" height="13"></div>
				</div>
				<div class="col my-auto">
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
				<div>Celkem bitev</div>
				<span><?php echo number_format($_SESSION['battles'], 0,"" ," "); ?></span>
			</div>
			<div class="col my-auto">
				<div>Ø poškození</div>
				<span><?php echo number_format($_SESSION['damage_per_battle'], 2,","," "); ?></span>
			</div>
			<div class="col my-auto" style="font-size: 19px;">
				<div>Osobní hodnocení</div>
				<span style="font-size: 45px;"><?php echo number_format($_SESSION['global_rating'], 0,"" ," "); ?></span>
			</div>
			<div class="col my-auto">
				<div>Ø zkušenosti za bitvu</div>
				<span><?php echo $_SESSION['battle_avg_xp']; ?></span>
			</div>
			<div class="col my-auto">
				<div>Vítězství</div>
				<span><?php echo number_format($_SESSION['percent_win'], 2,","," "); ?>%</span>
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
				$keys = array_keys($_SESSION['ACHIEVEMENTS_DATA']['data'][$_SESSION['account_id']]['achievements']);
				
				$a = 6;
				for ($i = 0; $i <= $a; $i++){
					
					if (getArchievementsImage($keys[$i]) != null){
						echo "
						<div class='col my-auto'>
							<img src=".getArchievementsImage($keys[$i]).">
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
							<?php echo number_format($_SESSION['battles'], 0,"" ," "); ?>
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Vítězství
						</div>
						<div class="col my-auto <?php echo barvicka_percent($_SESSION['percent_win']);?>" style="">
							<?php echo number_format($_SESSION['percent_win'], 2,","," "); ?>%
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
							<?php echo number_format($_SESSION['damage_per_battle'], 2,","," "); ?>
						</div>
					</div>
					<div class="row">
						<div class="col my-auto">
							Průměrné zkušenosti
						</div>
						<div class="col my-auto">
							<?php echo $_SESSION['battle_avg_xp']; ?>
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
							<?php echo number_format($_SESSION['global_rating'], 0,"" ," "); ?>
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
						<div class="col my-auto <?php echo barvicka_wn7(number_format(wn7(6.43,$_SESSION['damage_per_battle'],$_SESSION['spotted']/$_SESSION['battles'],$_SESSION['avg_def'],$_SESSION['percent_win'],$_SESSION['battles'],$_SESSION['avg_def']),0, ".",""));?>" style="">
							<?php echo number_format(wn7(6.43,$_SESSION['damage_per_battle'],$_SESSION['spotted']/$_SESSION['battles'],$_SESSION['avg_def'],$_SESSION['percent_win'],$_SESSION['battles'],$_SESSION['avg_def']), 2,","," ");?>	
						</div>
					</div>
					<div class="row" style="padding: 5px 0 10px 0">
						<div class="col my-auto">
							WN8
						</div>
						<div class="col my-auto <?php echo barvicka_wn8(number_format(wn8($_SESSION['damage_per_battle'],$_SESSION['avg_damage_assisted'],$_SESSION['avg_frags'],$_SESSION['avg_def'],$_SESSION['percent_win'])),0, ".","");?>" style="">
							<?php echo number_format(wn8($_SESSION['damage_per_battle'],$_SESSION['avg_damage_assisted'],$_SESSION['avg_frags'],$_SESSION['avg_def'],$_SESSION['percent_win']), 2,","," "); ?>
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

