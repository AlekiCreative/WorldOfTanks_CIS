<?php

	//api url
	$request_players_url="https"."://api.worldoftanks.eu/wot/account/info/?application_id=".$_SESSION['APP_ID']."&account_id=".$_SESSION['account_id']."&access_token=".$_SESSION['access_token']."&extra=private.boosters%2Cprivate.garage%2Cprivate.grouped_contacts%2Cprivate.personal_missions%2Cstatistics.random";
	$PLAYERS_DATA = json_decode(file_get_contents($request_players_url), true);
	$_SESSION['PLAYERS_DATA'] = $PLAYERS_DATA;
	
		//SESSION data
		$_SESSION['last_battle_time'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['last_battle_time'];
		$_SESSION['created_at'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['created_at'];
		$_SESSION['global_rating'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['global_rating'];
		$_SESSION['clan_id'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['clan_id'];
		$_SESSION['nickname'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['nickname'];
		//private
		$_SESSION['gold'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['gold'];
		$_SESSION['free_xp'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['free_xp'];
		$_SESSION['credits'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['credits'];
		$_SESSION['premium_expires_at'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['premium_expires_at'];
		$_SESSION['bonds'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['bonds'];
		$_SESSION['battle_life_time'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['battle_life_time'];
		$_SESSION['garage'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['garage'];
		$_SESSION['personal_missions'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['personal_missions'];
		$_SESSION['boosters'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['private']['boosters'];
		//statistics
		$_SESSION['spotted'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['spotted'];
	//	$_SESSION['battles_on_stunning_vehicles'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battles_on_stunning_vehicles'];
	//	$_SESSION['avg_damage_blocked'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['avg_damage_blocked'];
	//	$_SESSION['direct_hits_received'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['direct_hits_received'];
	//	$_SESSION['explosion_hits'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['explosion_hits'];
	//	$_SESSION['piercings_received'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['piercings_received'];
	//	$_SESSION['piercings'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['piercings'];
	//	$_SESSION['xp'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['xp'];
	//	$_SESSION['survived_battles'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['survived_battles'];
		$_SESSION['dropped_capture_points'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['dropped_capture_points'];
	//	$_SESSION['hits_percents'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['hits_percents'];
		$_SESSION['draws'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['draws'];
		$_SESSION['battles'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battles'];
	//	$_SESSION['damage_received'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['damage_received'];
		$_SESSION['avg_damage_assisted'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['avg_damage_assisted'];
	//	$_SESSION['avg_damage_assisted_track'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['avg_damage_assisted_track'];
		$_SESSION['frags'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['frags'];
	//	$_SESSION['stun_number'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['stun_number'];
	//	$_SESSION['avg_damage_assisted_radio'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['avg_damage_assisted_radio'];
	//	$_SESSION['capture_points'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['capture_points'];
	//	$_SESSION['stun_assisted_damage'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['stun_assisted_damage'];
	//	$_SESSION['hits'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['hits'];
		$_SESSION['battle_avg_xp'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battle_avg_xp'];
		$_SESSION['wins'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['wins'];
		$_SESSION['losses'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['losses'];
		$_SESSION['damage_dealt'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['damage_dealt'];
	//	$_SESSION['no_damage_direct_hits_received'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['no_damage_direct_hits_received'];
	//	$_SESSION['shots'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['shots'];
	//	$_SESSION['explosion_hits_received'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['explosion_hits_received'];
	//	$_SESSION['tanking_factor'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['tanking_factor'];
	
	
	
	//calc
	$_SESSION['avg_def'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['dropped_capture_points']/$PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battles'];
	$_SESSION['avg_spotted'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['spotted']/$PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battles'];
	$_SESSION['avg_frags'] = $PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['frags']/$PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battles'];
	$_SESSION['damage_per_battle'] = intval($PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['damage_dealt'])/intval($PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battles']);
	$_SESSION['percent_win'] = intval($PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['wins'])/(intval($PLAYERS_DATA['data'][$_SESSION['account_id']]['statistics']['random']['battles'])/100);

/* =Zatězuje výkon=
	$request_vehicles_url="https"."://api.worldoftanks.eu/wot/tanks/stats/?application_id=".$_SESSION['APP_ID']."&account_id=".$_SESSION['account_id']."&access_token=".$_SESSION['access_token']."&extra=random";
	$_SESSION['VEHICLE_DATA'] = json_decode(file_get_contents($request_vehicles_url), true);
*/	
	$request_garage_vehicles_url="https"."://api.worldoftanks.eu/wot/tanks/stats/?application_id=".$_SESSION['APP_ID']."&in_garage=1&account_id=".$_SESSION['account_id']."&access_token=".$_SESSION['access_token']."&extra=random";
	$_SESSION['GARAGE_VEHICLE_DATA'] = json_decode(file_get_contents($request_garage_vehicles_url), true);
	
	
	$_SESSION['count_tier_medium'] = 0;
	$_SESSION['count_tier_heavy'] = 0;
	$_SESSION['count_tier_light'] = 0;
	$_SESSION['count_tier_at'] = 0;
	$_SESSION['count_tier_spg'] = 0;
	
	
	
	
	//calc count tier in garage 
	
	for ($i = 0; $i <= count($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']])-1; $i++){
		
		$type = getClassVehicle($_SESSION['GARAGE_VEHICLE_DATA']['data'][$_SESSION['account_id']][$i]['tank_id']) ;
		
		if ($type == 'heavyTank'){
			$_SESSION['count_tier_heavy']++;
		}
		elseif($type == 'lightTank'){
			$_SESSION['count_tier_light']++;
		}
		elseif($type == 'mediumTank'){
			$_SESSION['count_tier_medium']++;
		}
		elseif($type == 'AT-SPG'){
			$_SESSION['count_tier_at']++;
		}
		elseif($type == 'SPG'){
			$_SESSION['count_tier_spg']++;
		}
		
		
	}

	function getClassVehicle($IDtank){
		
	$reguest_url_vehicles_tankopedia="https"."://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=".$_SESSION['APP_ID']."&tank_id=".$IDtank;
	$DATA = json_decode(file_get_contents($reguest_url_vehicles_tankopedia), true);	
	
	return $DATA['data'][$IDtank]["type"];
		
	}
	
	
	$request_clan_url="https"."://api.worldoftanks.eu/wot/clans/info/?application_id=".$_SESSION['APP_ID']."&clan_id=".$_SESSION['clan_id']."&access_token=".$_SESSION['access_token']."&extra=private.online_members&language=cs";
	$_SESSION['CLAN_DATA'] = json_decode(file_get_contents($request_clan_url), true);
	
	$request_clan_statistic_url="https"."://api.worldoftanks.eu/wot/clanratings/clans/?application_id=".$_SESSION['APP_ID']."&clan_id=".$_SESSION['clan_id'];
	$_SESSION['CLAN_STATISTIC_DATA'] = json_decode(file_get_contents($request_clan_statistic_url), true);
	
	$request_achievements_url="https"."://api.worldoftanks.eu/wot/account/achievements/?application_id=".$_SESSION['APP_ID']."&account_id=".$_SESSION['account_id']."&language=cs";
	$_SESSION['ACHIEVEMENTS_DATA'] = json_decode(file_get_contents($request_achievements_url), true);
	
	$request_message_board_url="https"."://api.worldoftanks.eu/wot/clans/messageboard/?application_id=".$_SESSION['APP_ID']."&access_token=".$_SESSION['access_token'];
	$_SESSION['MESSAGE_BOARD'] = json_decode(file_get_contents($request_message_board_url), true);
	
	
	
?>

