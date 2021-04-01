<?php 

    //$validity_token = false;
	//GET PRIVATE DATA WG
	if($validity_token){
		$MESSAGE_BOARD = $API->get_clan_message($_SESSION['access_token']); //Získaní privátních uživatelský dat z WG
		$ACCOUNT_DATA_PRIVATE = $API->get_private_account_data($_SESSION['access_token'],$_SESSION['account_id']); //Získaní klanové vývěšky z WG
		$CLAN_DATA_PRIVATE = $API->get_clan_data_private($_SESSION['access_token'], $CLAN_DATA[1]);
	}


?>