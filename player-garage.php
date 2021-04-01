<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['authenticate'])) {
	header('Location: index.php');
	exit;
}

?>


<?php 

include "parts/header.php";
include "parts/top-vehicle-bar.php";

$lightTank = 0;
$SPG = 0;
$heavyTank = 0;
$AT = 0;
$mediumTank = 0;

for ($i = 0; $i < count($ACCOUNT_VEHICLE); $i++){

	if ($ACCOUNT_VEHICLE[$i]["type"] == "lightTank"){
		$lightTank++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["type"] == "SPG"){
		$SPG++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["type"] == "heavyTank"){
		$heavyTank++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["type"] == "AT-SPG"){
		$AT++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["type"] == "mediumTank"){
		$mediumTank++;
	}
}

$master = 0;
$one = 0;
$two = 0;
$three = 0;
$none = 0;

for ($i = 0; $i < count($ACCOUNT_VEHICLE); $i++){

	if ($ACCOUNT_VEHICLE[$i]["mark_of_mastery"] == 4){
		$master++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["mark_of_mastery"] == 3){
		$one++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["mark_of_mastery"] == 2){
		$two++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["mark_of_mastery"] == 1){
		$three++;
	}
	elseif ($ACCOUNT_VEHICLE[$i]["mark_of_mastery"] == 0){
		$none++;
	}
}


?>

<style>
#player-garage a{font-weight: bold; color:white;}
</style>



<section class="garage-info" style="padding-top:  20px; padding-bottom: 20px; color: white; margin-top: 20px;">
	<div class="container">	
		<div class="text-center">
			<div class="row" style="font-size: 14px;">
				<div class="col my-auto">
					<div class="">
						Medka
					</div>
					<div class="">
						<?php echo $mediumTank; ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						Lehky
					</div>
					<div class="">
						<?php echo $lightTank; ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						Težšký
					</div>
					<div class="">
						<?php echo $heavyTank; ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						TD
					</div>
					<div class="">
						<?php echo $AT; ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						SPG
					</div>
					<div class="">
						<?php echo $SPG; ?>
					</div>	
				</div>
				
				<div class="col">
				</div>
				
				<div class="col">
					<div class="" style="font-size: 12px; top: 13px; position: relative;">
						Celkem tanků
					</div>
					<div class="" style="font-size: 55px;">
						<?php echo count($ACCOUNT_VEHICLE) ;?>
					</div>
				</div>
				<div class="col">
				</div>
				
				<div class="col my-auto">
					<div class="">
						Mko
					</div>
					<div class="">
					<?php echo $master; ?>
					</div>
				</div>

				<div class="col my-auto">
					<div class="">
						1st
					</div>
					<div class="">
						<?php echo $one; ?>
					</div>
				</div>
				
				<div class="col my-auto">
					<div class="">
						2nd
					</div>
					<div class="">
						<?php echo $two; ?>
					</div>
				</div>
				
				<div class="col my-auto">
					<div class="">
						3rd
					</div>
					<div class="">
						<?php echo $three; ?>
					</div>
				</div>
				<div class="col my-auto">
					<div class="">
						
					</div>
					<div class="">
						
					</div>
				</div>
				
				

				
			</div>	
		</div>	
	</div>
</section>


<section class="garage-list" style="padding-top:  40px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<table class="table text-left" id="contract_border">

            <thead>
                <tr>
					<th></th>
                    <th></th>
                    <th>Tank</th>
                    <th>Bitev</th>
                    <th>Třída</th>
                    <th>Národ</th>
                    <th>M</th>
                    <th>Vítězství</th>
  
                </tr>
            </thead>
 
			<tbody>
				
				<?php
					for ($i = 0; $i < count($ACCOUNT_VEHICLE); $i++){
					echo
						'<tr>
							<th><img src="assets/img/'.$ACCOUNT_VEHICLE[$i]['type'].'.png" height="30px"></th>
							<th><img src="'.$ACCOUNT_VEHICLE[$i]['icon'].'"></th>
							<th class="text-left">'.$ACCOUNT_VEHICLE[$i]['vehicle_name'].'</th>
							<th>'.$ACCOUNT_VEHICLE[$i]['random']['battles'].'</th>
							<th>'.$ACCOUNT_VEHICLE[$i]['tier'].'</th>
							<th><img src="assets/img/'.$ACCOUNT_VEHICLE[$i]['nation'].'.png" height="30px"></th>
							<th><img src="assets/img/'.$ACCOUNT_VEHICLE[$i]['mark_of_mastery'].'.png" width="26px"></th>
							<th><div class="prumerne" >'.number_format($ACCOUNT_VEHICLE[$i]['random']['winrate'], 2,","," ") .'%</div></th>
		  
						</tr>';
				}
				
				
				?>
				
				
				
				
				
			</tbody>
		</table>

		
	</div>
</section>


<?php include "parts/footer.php";?>