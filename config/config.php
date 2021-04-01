<?php

include "get_data.php";

$_SESSION['history_week'] = "false";
$_SESSION['history_month'] = "false";

function barvicka_percent($val){
		
    if($val < 45){return "velmi-spatne";}
    elseif  ($val >= 45 and $val < 47) {return "spatne";}
    elseif  ($val >= 47 and $val < 49) {return "podprumerne";}
    elseif  ($val >= 49 and $val < 52) {return "prumerne";}
    elseif  ($val >= 52 and $val < 54) {return "dobre";}
    elseif  ($val >= 54 and $val < 56) {return "velmi-dobre";}
    elseif  ($val >= 56 and $val < 60) {return "vyborne";}
    elseif  ($val >= 60 and $val < 65) {return "unikatni";}
    elseif  ($val >= 65) {return "superunikatni";}
    else {return "Chyba funkce barvicka_percent přijatá hodnota: ".$val;}
}
function barvicka_wn8($val_wn8){
		
    if($val_wn8 < 300){return "velmi-spatne";}
    elseif  ($val_wn8 >= 300 and $val_wn8 < 599) {return "spatne";}
    elseif  ($val_wn8 >= 600 and $val_wn8 < 899) {return "podprumerne";}
    elseif  ($val_wn8 >= 900 and $val_wn8 < 1249) {return "prumerne";}
    elseif  ($val_wn8 >= 1250 and $val_wn8 < 1599) {return "dobre";}
    elseif  ($val_wn8 >= 1600 and $val_wn8 < 1899) {return "velmi-dobre";}
    elseif  ($val_wn8 >= 1900 and $val_wn8 < 2349) {return "vyborne";}
    elseif  ($val_wn8 >= 2350 and $val_wn8 < 2899) {return "unikatni";}
    elseif  ($val_wn8 >= 2899) {return "superunikatni";}
    else {return "Chyba funkce barvicka_wn8 přijatá hodnota: ".$val_wn8;}
}

function getNickPlayer($PlayerID){
		
    $reguest_url_info_player="https"."://api.worldoftanks.eu/wot/clans/accountinfo/?application_id=".$_SESSION['APP_ID']."&account_id=".$PlayerID;
    $playerDATA = json_decode(file_get_contents($reguest_url_info_player), true);

    return $playerDATA['data'][$PlayerID]['account_name'] ;
}

function findTopVehicle($data){

     $first_vehicle = array("tank_id"=>" ", "battles"=>" ", "damage_per_battles"=>" ", "winrate"=>" ", "big_image"=>" ", "vehicle_name"=>" ");
     $second_vehicle = array("tank_id"=>" ", "battles"=>" ", "damage_per_battles"=>" ", "winrate"=>" ", "big_image"=>" ", "vehicle_name"=>" ");
     $thirt_vehicle = array("tank_id"=>" ", "battles"=>" ", "damage_per_battles"=>" ", "winrate"=>" ", "big_image"=>" ", "vehicle_name"=>" ");
    
    for ($i = 0; $i < count($data); $i++){
        if ($first_vehicle ['battles'] < $data[$i]['random']['battles']){			    

            $first_vehicle['battles'] = $data[$i]['random']['battles'];
            $first_vehicle['tank_id'] = $data[$i]['vehicle_id'];
            $first_vehicle['big_image'] = $data[$i]['big_image'];
            $first_vehicle['vehicle_name'] = $data[$i]['vehicle_name'];

            $first_vehicle['damage_per_battles'] = $data[$i]['random']['damage_dealt']/$data[$i]['random']['battles'];
            $first_vehicle['winrate'] = ($data[$i]['random']['wins']/$data[$i]['random']['battles'])*100;
        }
    }

    for ($i = 0; $i < count($data); $i++){
        if ($second_vehicle ['battles'] < $data[$i]['random']['battles'] and $data[$i]['random']['battles'] < $first_vehicle['battles']){	

            $second_vehicle['battles'] = $data[$i]['random']['battles'];
            $second_vehicle['tank_id'] = $data[$i]['vehicle_id'];
            $second_vehicle['big_image'] = $data[$i]['big_image'];
            $second_vehicle['vehicle_name'] = $data[$i]['vehicle_name'];

            $second_vehicle['damage_per_battles'] = $data[$i]['random']['damage_dealt']/$data[$i]['random']['battles'];
            $second_vehicle['winrate'] = ($data[$i]['random']['wins']/$data[$i]['random']['battles'])*100;
        }}
    for ($i = 0; $i < count($data); $i++){ 
        if ($thirt_vehicle ['battles'] < $data[$i]['random']['battles'] and $data[$i]['random']['battles'] < $second_vehicle['battles']){

            $thirt_vehicle['battles'] = $data[$i]['random']['battles'];
            $thirt_vehicle['tank_id'] = $data[$i]['vehicle_id'];
            $thirt_vehicle['big_image'] = $data[$i]['big_image'];
            $thirt_vehicle['vehicle_name'] = $data[$i]['vehicle_name'];

            $thirt_vehicle['damage_per_battles'] = $data[$i]['random']['damage_dealt']/$data[$i]['random']['battles'];
            $thirt_vehicle['winrate'] = ($data[$i]['random']['wins']/$data[$i]['random']['battles'])*100;
        }}

    
$res_vehicle = array($first_vehicle, $second_vehicle, $thirt_vehicle);
return $res_vehicle;
}


?>
