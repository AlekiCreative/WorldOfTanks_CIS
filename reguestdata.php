<?php
//	500164145
//	c4e7220aa93586ed4243c1224f2585a5
//  ?redirect_uri=http%3A%2F%2Flocalhost%2Fcis&language=cs

$wot_access_token = "";
$clan_id = 500164145;
$player_id = 529439356;
$application_id = "c4e7220aa93586ed4243c1224f2585a5";
$request_url="https"."://api.worldoftanks.eu/wot/account/info/?application_id=".$application_id."&account_id=".$player_id. "&access_token=".$wot_access_token."&extra=statistics.random";
$data = json_decode(file_get_contents($request_url), true);
print_r($data);


?>