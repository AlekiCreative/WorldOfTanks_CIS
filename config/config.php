 <?php 
 
	$_SESSION['history_week'] = "false";
	$_SESSION['history_month'] = "false";
	
	
 	
 	
	function barvicka_percent($val){
		
		if($val < 45){
			return "velmi-spatne";
		}
		elseif  ($val >= 45 and $val < 47) {
			return "spatne";
		}
		elseif  ($val >= 47 and $val < 49) {
			return "podprumerne";
		}
		elseif  ($val >= 49 and $val < 52) {
			return "prumerne";
		}
		elseif  ($val >= 52 and $val < 54) {
			return "dobre";
		}
		elseif  ($val >= 54 and $val < 56) {
			return "velmi-dobre";
		}
		elseif  ($val >= 56 and $val < 60) {
			return "vyborne";
		}
		elseif  ($val >= 60 and $val < 65) {
			return "unikatni";
		}
		elseif  ($val >= 65) {
			return "superunikatni";
		}
		else {
			return "je to v hajzlu";
		}
		
		
	}
	function barvicka_wn7($val_wn7){
		
		if($val_wn7 < 500){
			return "velmi-spatne";
		}
		elseif  ($val_wn7 >= 500 and $val_wn7 < 699) {
			return "spatne";
		}
		elseif  ($val_wn7 >= 700 and $val_wn7 < 899) {
			return "podprumerne";
		}
		elseif  ($val_wn7 >= 900 and $val_wn7 < 1099) {
			return "prumerne";
		}
		elseif  ($val_wn7 >= 1100 and $val_wn7 < 1349) {
			return "dobre";
		}
		elseif  ($val_wn7 >= 1350 and $val_wn7 < 1549) {
			return "velmi-dobre";
		}
		elseif  ($val_wn7 >= 1550 and $val_wn7 < 1849) {
			return "vyborne";
		}
		elseif  ($val_wn7 >= 1850 and $val_wn7 < 2049) {
			return "unikatni";
		}
		elseif  ($val_wn7 >= 2049) {
			return "superunikatni";
		}
		else {
			return "je to v hajzlu";
		}
		
		return "kurwa";
	}
	function barvicka_wn8($val_wn8){
		
		if($val_wn8 < 300){
			return "velmi-spatne";
		}
		elseif  ($val_wn8 >= 300 and $val_wn8 < 599) {
			return "spatne";
		}
		elseif  ($val_wn8 >= 600 and $val_wn8 < 899) {
			return "podprumerne";
		}
		elseif  ($val_wn8 >= 900 and $val_wn8 < 1249) {
			return "prumerne";
		}
		elseif  ($val_wn8 >= 1250 and $val_wn8 < 1599) {
			return "dobre";
		}
		elseif  ($val_wn8 >= 1600 and $val_wn8 < 1899) {
			return "velmi-dobre";
		}
		elseif  ($val_wn8 >= 1900 and $val_wn8 < 2349) {
			return "vyborne";
		}
		elseif  ($val_wn8 >= 2350 and $val_wn8 < 2899) {
			return "unikatni";
		}
		elseif  ($val_wn8 >= 2899) {
			return "superunikatni";
		}
		else {
			return "je to v hajzlu";
		}
	}
	
	function wn7 ($TIER,$DAMAGE,$SPOT,$DEF,$WINRATE,$GAMESPLAYED, $FRAGS){ 
		
		$e = 2.7182818284590452354;
			
	
		$frags = (1240-1040/(MIN($TIER,6))^0.164)*$FRAGS;
		$damage = $DAMAGE*530/(184*$e^(0.24*$TIER)+130);
		$spot = $SPOT*125;
		$defense = MIN($DEF,2.2)*100;
		$winrate = ((185/(0.17+$e^(($WINRATE-35)*-0.134)))-500)*0.45;
		$low_tiew_penalty = ((5 - MIN($TIER,5))*125) / (1 + $e^( ( $TIER - ($GAMESPLAYED/220)^(3/$TIER) )*1.5 ));
	
		$WN7 = $frags+$damage+$spot+$defense+$winrate-$low_tiew_penalty;
	
		return $WN7;
	}
	
	function wn8 ($avgDmg, $avgSpot, $avgFrag, $avgDef, $avgWinRate){
		
		//Inializace očekáváních hodnot
		$expDmg = 834.673;
		$expSpot = 0.797;
		$expFrag = 1.042;
		$expDef = 0.647;
		$expWinRate = 54.318;
		//STEP 1
		$rDAMAGE = $avgDmg / $expDmg; // Basically you divide your average damage / expected damage.
		$rSPOT = $avgSpot / $expSpot; // Divide Average Spots Per battle / Expected Average Spots Per Battle.
		$rFRAG = $avgFrag / $expFrag; // Divide Average Kills Per Battle / Expected Kills Per Battle.
		$rDEF = $avgDef / $expDef; // Divide Average "Decap" Points Per Battle ( Defense points) / Expected "Decap" Points per battle.
		$rWIN = $avgWinRate / $expWinRate; // Divide Average Winrate / Expected Winrate.
		//STEP 2
		$rWINc = max(0, ($rWIN - 0.71) / (1 - 0.71) ); // Basically this is (rWIN - 0.71) / (1 - 0.71). 
		$rDAMAGEc = max(0, ($rDAMAGE - 0.22) / (1 - 0.22) );
		$rFRAGc = max(0, min($rDAMAGEc + 0.2, ($rFRAG - 0.12) / (1 - 0.12))); // Its either (rDAMAGEc + 0.2) or (rFRAG - 0.12) / (1 - 0.12). Depends which one is the lowest.
		$rSPOTc = max(0, min($rDAMAGEc + 0.1, ($rSPOT - 0.38) / (1 - 0.38)));
		$rDEFc = max(0, min($rDAMAGEc + 0.1, ($rDEF - 0.10) / (1 - 0.10)));
		//STEP 3
		$WN8 = 980*$rDAMAGEc + 210*$rDAMAGEc*$rFRAGc + 155*$rFRAGc*$rSPOTc + 75*$rDEFc*$rFRAGc + 145*MIN(1.8,$rWINc);

		return $WN8;
	}
	
	function getVehiclesName($IDtank){
		
		$reguest_url_vehicles_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=".$_SESSION['APP_ID']."&tank_id=".$IDtank;
		$DATA = json_decode(file_get_contents($reguest_url_vehicles_tankopedia), true);
		
		return $DATA['data'][$IDtank]["name"];
	}
	function getVehiclesPhoto($IDtank){
		
		$reguest_url_vehicles_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=".$_SESSION['APP_ID']."&tank_id=".$IDtank;
		$DATA = json_decode(file_get_contents($reguest_url_vehicles_tankopedia), true);
		
		return $DATA['data'][$IDtank]["images"]["big_icon"];
	}
	function getVehiclesNation($IDtank){
		
		$reguest_url_vehicles_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=".$_SESSION['APP_ID']."&tank_id=".$IDtank;
		$DATA = json_decode(file_get_contents($reguest_url_vehicles_tankopedia), true);
		
		return $DATA['data'][$IDtank]["nation"];
	}
	
	function getClassVehicle($IDtank){
		
	$reguest_url_vehicles_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=".$_SESSION['APP_ID']."&tank_id=".$IDtank;
	$DATA = json_decode(file_get_contents($reguest_url_vehicles_tankopedia), true);	
	
	return $DATA['data'][$IDtank]["type"];
		
	}
	function getVehiclesTier($IDtank){
		
	$reguest_url_vehicles_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=".$_SESSION['APP_ID']."&tank_id=".$IDtank;
	$DATA = json_decode(file_get_contents($reguest_url_vehicles_tankopedia), true);	
	
	return $DATA['data'][$IDtank]["tier"];
		
	}
	
	function getVehiclesIcon($IDtank){
		
		$reguest_url_vehicles_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=".$_SESSION['APP_ID']."&tank_id=".$IDtank;
		$DATA = json_decode(file_get_contents($reguest_url_vehicles_tankopedia), true);
		
		return $DATA['data'][$IDtank]["images"]["contour_icon"];
	}
		
		function findTopVehicle(){
		
			$Vehicles = $_SESSION['GARAGE_VEHICLE_DATA'];
			
			//$res_vehicle = array('1' => array('tank_id'=>'','i'=>'','battles'=>''),'2' => array('tank_id'=>'','i'=>'','battles'=>''),'3' => array('tank_id'=>'','i'=>'','battles'=>''),);
			
			 $first_vehicle = array("tank_id"=>" ", "battles"=>" ", "damage_per_battles"=>" ", "winrate"=>" ");
			 $second_vehicle = array("tank_id"=>" ", "battles"=>" ", "damage_per_battles"=>" ", "winrate"=>" ");
			 $thirt_vehicle = array("tank_id"=>" ", "battles"=>" ", "damage_per_battles"=>" ", "winrate"=>" ");
			
			for ($i = 0; $i <= count($Vehicles['data'][$_SESSION['account_id']])-1; $i++){
				
					
					if ($first_vehicle ['battles'] < $Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles']){			
					
						$first_vehicle['battles'] = $Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'];
						$first_vehicle['tank_id'] = $Vehicles['data'][$_SESSION['account_id']][$i]['tank_id'];
						$first_vehicle['damage_per_battles'] = $Vehicles['data'][$_SESSION['account_id']][$i]['random']['damage_dealt']/$Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'];
						$first_vehicle['winrate'] = ($Vehicles['data'][$_SESSION['account_id']][$i]['random']['wins']/$Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'])*100;
					}
					elseif ($second_vehicle ['battles'] < $Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'] and $second_vehicle ['battles'] < $first_vehicle ['battles']){			
					
						$second_vehicle['battles'] = $Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'];
						$second_vehicle['tank_id'] = $Vehicles['data'][$_SESSION['account_id']][$i]['tank_id'];
						$second_vehicle['damage_per_battles'] = $Vehicles['data'][$_SESSION['account_id']][$i]['random']['damage_dealt']/$Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'];
						$second_vehicle['winrate'] = ($Vehicles['data'][$_SESSION['account_id']][$i]['random']['wins']/$Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'])*100;
					}
					elseif ($thirt_vehicle ['battles'] < $Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'] and $second_vehicle ['battles'] < $first_vehicle ['battles']){			
					
						$thirt_vehicle['battles'] = $Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'];
						$thirt_vehicle['tank_id'] = $Vehicles['data'][$_SESSION['account_id']][$i]['tank_id'];
						$thirt_vehicle['damage_per_battles'] = $Vehicles['data'][$_SESSION['account_id']][$i]['random']['damage_dealt']/$Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'];
						$thirt_vehicle['winrate'] = ($Vehicles['data'][$_SESSION['account_id']][$i]['random']['wins']/$Vehicles['data'][$_SESSION['account_id']][$i]['random']['battles'])*100;
					}
					
				}

			
		$res_vehicle = array($first_vehicle, $second_vehicle, $thirt_vehicle);
		return $res_vehicle;
		}
	
	
	function returnTopVehicle($position, $par){
		
		$data = findTopVehicle();
		
		
		
		if ($position == 1){
			return $data[0][$par];
		}
		elseif ($position == 2){
			return $data[1][$par];
		}
		elseif ($position == 3){
			return $data[2][$par];
		}
		
		
	}
	
	function getArchievementsImage($archievement){
		
		$reguest_url_achievements_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/achievements/?application_id=".$_SESSION['APP_ID']."&language=cs";
		$achievementsDATA = json_decode(file_get_contents($reguest_url_achievements_tankopedia), true);
		
				
		return $achievementsDATA['data'][$archievement]['image'];
	}
 
	function getNickPlayer($PlayerID){
		
		$reguest_url_info_player="https"."://api.worldoftanks.eu/wot/clans/accountinfo/?application_id=".$_SESSION['APP_ID']."&account_id=".$PlayerID;
		$playerDATA = json_decode(file_get_contents($reguest_url_info_player), true);
		
		
		return $playerDATA['data'][$PlayerID]['account_name'] ;
	}
	
	function findCommander(){
		
		for ($i = 0; $i <= $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members_count']-1; $i++){
		
			if ($_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['role'] == "commander" ){
				
				return $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['members'][$i]['account_name'];
			}
		}
	}
	
	function getGlobalRatingPlayer($PlayerID){
		
		$reguest_url_info_player="https"."://api.worldoftanks.eu/wot/account/info/?application_id=".$_SESSION['APP_ID']."&account_id=".$PlayerID."&extra=statistics.random";
		$playerDATA = json_decode(file_get_contents($reguest_url_info_player), true);
		
		
		return $playerDATA['data'][$PlayerID]['global_rating'] ;
	}
	
	function getBattlesPlayer($PlayerID){
		
		$reguest_url_info_player="https"."://api.worldoftanks.eu/wot/account/info/?application_id=".$_SESSION['APP_ID']."&account_id=".$PlayerID."&extra=statistics.random";
		$playerDATA = json_decode(file_get_contents($reguest_url_info_player), true);
		
		
		return $playerDATA['data'][$PlayerID]['statistics']['random']['battles'] ;
	}
	
 ?>