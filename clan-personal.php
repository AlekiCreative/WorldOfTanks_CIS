<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['authenticate'])) {
	header('Location: index.php');
	exit;
}

?>

<?php include "parts/header.php";?>
<?php include "parts/navigation.php";?>
<?php include "parts/sidebar.php";?>
<?php include 'config/config.php';?>
<style>
#clan-personal {font-weight: bold; color:white;}
</style>

<section class="personal-info" style="padding-top: 90px;  color: white; font-size: 14px;">
	<div class="container">		
		<div class="text-center">
			<div class="row" style="margin-bottom: 25px;">
			
				<div class="col my-auto" style="">
					<div style="font-size: 22px;">Velitel</div>
					<span style="font-size: 35px;"><?php echo findCommander();?></span>
				</div>
				
								
				<div class="col my-auto">
					<div style="font-size: 22px;">Celkem členu</div>
					<span style="font-size: 95px;"><?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members_count']; ?></span>
				</div>
				<!-- Funkce se připravuje -->
				<div class="col my-auto" style="">
					<div style="font-size: 22px;">Zástupce</div>
					<span style="font-size: 35px;">null</span>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!--plánovaná funkce
	<section class="personal-info" style="color: white; font-size: 14px; background-color: #333; padding: 25px;">
		<div class="container" style="">	
			<div class="text-center">
			<div class="row" style="">
				<div class="col my-auto" style="">
					
				</div>
			
				<div class="col my-auto" style="">
					<div>Výkonní důstojník</div>
					<span>2</span>
				</div>
				
								
				<div class="col my-auto">
					<div>Bojový důstojník</div>
					<span>1</span>
				</div>
				
				<div class="col my-auto" style="">
					<div>Mladší důstojník</div>
					<span>4</span>
				</div>
				
				<div class="col my-auto" style="">
					<div>Vojín</div>
					<span>6</span>
				</div>
				
				<div class="col my-auto" style="">
					<div>Rekrut</div>
					<span>7</span>
				</div>
				
				<div class="col my-auto" style="">
					
				</div>
				
				
			</div>
			</div>
		</div>
			
		</div>
	</div>
</section>
-->
<!-- plánovaná funkce
<section class="top-player" style="padding: 30px 0 20px 0; color: white; font-size: 15px;">
			
	<div class="container">				
		<div class="text-center">
		<div style=" font-size: 20px; font-family: 'Roboto Condensed', Arial, 'Helvetica Neue', Helvetica, sans-serif;">Nejlepší hrači CSSTB podle PR</div>
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
-->




<section class="personal-list" style="padding-top:  40px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<table class="table text-left" id="contract_border">

            <thead>
                <tr>
					<th></th>
                    <th>Hráč</th>
					<th></th>
					<th></th>
                    <th>Hodnocení</th>
                    <th>Bitev</th>
                    <!--<th>Vítězství</th> Plánovaná funkce -->
                    <!--<th>WN8</th> Plánovaná funkce -->
                    <th>Hodnost</th>
                    <th>Připojen</th>
  
                </tr>
            </thead>
			<tbody>
 
 <?php 
	for ($i = 0; $i <= $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members_count']-1; $i++){
		
		echo 	'<tr>
                    <th><img src="assets/img/'.$_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['role_i18n'].'.png" height="30px"></th>
                    <th>'.$_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['account_name'].'</th>
					<th></th>
					<th></th>
                    <th>'.getGlobalRatingPlayer($_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['account_id']).'</th>
                    <th>'.getBattlesPlayer($_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['account_id']).'</th>
                    
                    <th>'.$_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['role_i18n'].'</th>
                    <th>'.date("d. m. Y, H:i",$_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['joined_at']).'</th>
  
				</tr>';
		
		
		
	}
 
 
 
 
 ?>
				

				
				
			</tbody>
		</table>

		
	</div>
</section>




<?php include "parts/footer.php";?>