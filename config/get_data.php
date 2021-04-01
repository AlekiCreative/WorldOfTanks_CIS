<?php 

	if($_SESSION["expires_at"] > time()){
		$validity_token = true;
	}else $validity_token = false;

	include "db_controller.php";
	require_once ('wargaming_api.php');

	$API = new WargamingAPI();

	//INI
	$allowed_clan = explode(",", DB_CONN("allowed_clans","option_name","cis_ini")[2]);
	$version_server = DB_CONN("version_server","option_name","cis_ini")[2];
	$version_client = DB_CONN("version_client","option_name","cis_ini")[2];

	//GET DB DATA
	$ACCOUNT_DATA = DB_CONN($_SESSION['account_id'],"account_id","accounts"); //Získaní uživatelský dat ze serveru
	$CLAN_DATA = DB_CONN($ACCOUNT_DATA[2],"clan_id","clans"); //Získaní klanových dat ze serveru

	
	//JSON Decode
	$CLAN_DATA_EMBLEM = json_decode($CLAN_DATA[7], true);
	$CLAN_DATA_MEMBERS = json_decode(mb_convert_encoding($CLAN_DATA[27], 'UTF-8', 'UTF-8'), true);
	$ACCOUNT_RANDOM = json_decode($ACCOUNT_DATA[10], true);
	$ACCOUNT_VEHICLE = json_decode(mb_convert_encoding($ACCOUNT_DATA[11], 'UTF-8', 'UTF-8'), true);
	$ACCOUNT_ARCHIEVEMENTS = json_decode(mb_convert_encoding($ACCOUNT_DATA[12], 'UTF-8', 'UTF-8'), true);
	
	function GET_MEMBER_INFO($PlayerID){
		return DB_CONN($PlayerID,"account_id","accounts");
	}


?>	