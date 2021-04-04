<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['authenticate'])) {
	header('Location: index.php');
	exit;
}
 include "parts/header.php";
 
$executive_officer = 0;
$private = 0;
$recruit = 0;
$junior_officer = 0;
$combat_officer = 0;
$reservist = 0;
$other = 0;

for ($i = 0; $i < $CLAN_DATA[8]; $i++){

	if ($CLAN_DATA_MEMBERS[$i]["role"] == "executive_officer"){
		$executive_officer++;
	}
	elseif ($CLAN_DATA_MEMBERS[$i]["role"] == "private"){
		$private++;
	}
	elseif ($CLAN_DATA_MEMBERS[$i]["role"] == "recruit"){
		$recruit++;
	}
	elseif ($CLAN_DATA_MEMBERS[$i]["role"] == "junior_officer"){
		$junior_officer++;
	}
	elseif ($CLAN_DATA_MEMBERS[$i]["role"] == "combat_officer"){
		$combat_officer++;
	}
	elseif ($CLAN_DATA_MEMBERS[$i]["role"] == "reservist"){
		$reservist++;
	}
	else{
		$other++;
	}
}
 
 
 ?>

<style>
#clan-personal a{font-weight: bold; color:white;}
</style>

<section class="personal-info" style="padding-top: 90px;  color: white; font-size: 14px;">
	<div class="container">		
		<div class="text-center">
			<div class="row" style="margin-bottom: 25px;">
			
				<div class="col my-auto" style="">
					<div style="font-size: 22px;">Velitel</div>
					<span style="font-size: 35px;"><?php echo $CLAN_DATA[6];?></span>
				</div>
				
								
				<div class="col my-auto">
					<div style="font-size: 22px;">Celkem členu</div>
					<span style="font-size: 95px;"><?php echo $CLAN_DATA[8]; ?></span>
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
<!--Počítatlo hráču podle hodnostích-->
	<section class="personal-info" style="color: white; font-size: 14px; background-color: #333; padding: 25px;">
		<div class="container" style="">	
			<div class="text-center">
			<div class="row" style="">
				<div class="col my-auto" style="">
					
				</div>
			
				<div class="col my-auto" style="">
					<div>Výkonní důstojník</div>
					<span><?php echo $executive_officer ?></span>
				</div>
				
								
				<div class="col my-auto">
					<div>Bojový důstojník</div>
					<span><?php echo $combat_officer ?></span>
				</div>
				
				<div class="col my-auto" style="">
					<div>Mladší důstojník</div>
					<span><?php echo $executive_officer ?></span>
				</div>
				
				<div class="col my-auto" style="">
					<div>Vojín</div>
					<span><?php echo $private ?></span>
				</div>
				
				<div class="col my-auto" style="">
					<div>Rekrut</div>
					<span><?php echo $recruit ?></span>
				</div>
				
				<div class="col my-auto" style="">
					
				</div>
			</div>
			</div>
		</div>
			
		</div>
	</div>
</section>






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
                    <th>Vítězství</th>
                    <!--<th>WN8</th> Plánovaná funkce -->
                    <th>Hodnost</th>
                    <th>Připojen</th>
  
                </tr>
            </thead>
			<tbody>
 
 <?php 
	for ($i = 0; $i < $CLAN_DATA[8]; $i++){

		$member = GET_MEMBER_INFO($CLAN_DATA_MEMBERS[$i]["account_id"]);
		$member_random = json_decode($member[10], true);

		echo 	'<tr>
                    <th><img src="assets/img/'.$CLAN_DATA_MEMBERS[$i]["role"].'.png" height="30px"></th> 
                    <th>'.$member[3].'</th> 
					<th></th> 
					<th></th>
                    <th>'.number_format($member[8], 0,","," ").'</th>
                    <th>'.number_format($member_random["battles"], 0,","," ").'</th>
                    <th><div class="'.barvicka_percent(number_format($member_random["winrate"], 2,","," ")).'" >'.number_format($member_random["winrate"], 2,","," ").' %</th>
                    <th>'.$CLAN_DATA_MEMBERS[$i]["role_i18n"].'</th>
                    <th>'.date("d. m. Y, H:i",$member[6]).'</th>
    
				</tr>';
		
		
		
	}
 
 
 
 
 ?>
				

				
				
			</tbody>
		</table>

		
	</div>
</section>




<?php include "parts/footer.php";?>