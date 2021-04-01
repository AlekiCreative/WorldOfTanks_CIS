<!DOCTYPE html>
<html>
    <head>

	<title>WoT CIS</title>

    <!-- =CSS= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">	
    <!-- =Fonts= -->
    <script src="https://kit.fontawesome.com/d77a98d2b4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>
	<body>

    <style>
    .notice {margin-top: 0px!important;}
    </style>  

    <?php 
    
    
    include "parts/notice.php";

    session_start();


    $_SESSION['APP_ID'] = "c4e7220aa93586ed4243c1224f2585a5";
    


    if(isset($_SESSION['status']) == 'ok')
        {

            include "config/db_controller.php";
            require_once ('config/wargaming_api.php');

            $API = new WargamingAPI();

            $allowed_clan = explode(",", DB_CONN("allowed_clans","option_name","cis_ini")[2]);

            $ACCOUNT_DATA = $API->get_account_data($_SESSION['account_id']); //Získaní klanové vývěšky z WG
		    $CLAN_DATA = $API->get_clan_data($ACCOUNT_DATA["data"][$_SESSION['account_id']]["clan_id"]);

            function valid_clan(){

                global $allowed_clan,$ACCOUNT_DATA,$CLAN_DATA;

                for ($a = 0; $a < count($allowed_clan); $a++){
                    if($allowed_clan[$a] == $ACCOUNT_DATA["data"][$_SESSION['account_id']]["clan_id"]){
                        return true;
                    }
                }
                return false;
            }


            if(valid_clan()){
                include "parts/index/login-successful.php"; //Enter part
            }else{
                include "parts/index/login-succesful-FALSE_CLAN.php";
            }
        }
	else {
		include "parts/index/welcome-login.php"; //Login part
	} 

?>



