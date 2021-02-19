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
#player-garage {font-weight: bold; color:white;}
</style>



<?php include "parts/top-vehicle-bar.php"; ?>

<section class="garage-info" style="padding-top:  20px; padding-bottom: 20px; color: white; margin-top: 20px;">
	<div class="container">	
		<div class="text-center">
			<div class="row" style="font-size: 14px;">
				<div class="col my-auto">
					<div class="">
						Medka
					</div>
					<div class="">
						<?php echo $_SESSION['count_tier_medium'] ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						Lehky
					</div>
					<div class="">
						<?php echo $_SESSION['count_tier_light'] ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						Težšký
					</div>
					<div class="">
						<?php echo $_SESSION['count_tier_heavy'] ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						TD
					</div>
					<div class="">
						<?php echo $_SESSION['count_tier_at'] ?>
					</div>	
				</div>
				<div class="col my-auto">
					<div class="">
						SPG
					</div>
					<div class="">
						<?php echo $_SESSION['count_tier_spg'] ?>
					</div>	
				</div>
				
				<div class="col">
				</div>
				
				<div class="col">
					<div class="" style="font-size: 12px; top: 13px; position: relative;">
						Celkem tanků
					</div>
					<div class="" style="font-size: 55px;">
						<?php echo count($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']]) ;?>
					</div>
				</div>
				<div class="col">
				</div>
				
				<div class="col my-auto">
					<div class="">
						Mko
					</div>
					<div class="">
						5
					</div>
				</div>

				<div class="col my-auto">
					<div class="">
						1st
					</div>
					<div class="">
						5
					</div>
				</div>
				
				<div class="col my-auto">
					<div class="">
						2nd
					</div>
					<div class="">
						15
					</div>
				</div>
				
				<div class="col my-auto">
					<div class="">
						3rd
					</div>
					<div class="">
						53
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
					for ($i = 0; $i <= count($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']])-1; $i++){
					echo
						'<tr>
							<th><img src="assets/img/'.getClassVehicle($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['tank_id']).'.png" height="30px"></th>
							<th><img src="'.getVehiclesIcon($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['tank_id']).'"></th>
							<th class="text-left">'.getVehiclesName($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['tank_id']).'</th>
							<th>'.$_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['random']['battles'].'</th>
							<th>'.getVehiclesTier($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['tank_id']).'</th>
							<th><img src="assets/img/'.getVehiclesNation($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['tank_id']).'.png" height="30px"></th>
							<th><img src="assets/img/'.$_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['mark_of_mastery'].'.png" width="26px"></th>
							<th><div class="prumerne" >'.number_format(($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['random']['wins']/$_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['random']['battles']*100), 2,","," ") .'%</div></th>
		  
						</tr>';
				}
				
				
				?>
				
				
				
				
				
			</tbody>
		</table>

		
	</div>
</section>


<?php include "parts/footer.php";?>