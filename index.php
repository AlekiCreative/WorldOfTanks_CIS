<?php include "parts/header.php"; 

session_start();


$_SESSION['APP_ID'] = "c4e7220aa93586ed4243c1224f2585a5";


if(isset($_SESSION['status']) == 'ok')
        {
		include "config/get_data.php";
		include "parts/login-successful.php"; //Enter part
		//echo $VEHICLE_DATA['data']['529439356']['1']['tank_id'];
		
        }
	else {
		include "parts/welcome-login.php"; //Login part
	} 

?>



