<?php
	session_start();
	
    require_once('wargaming_auth.php');

    $wargaming = new WargamingAuth();

    if (empty($_GET['status']))
    {
        $wargaming->get_token();
    }

    if (isset($_GET['status']) && isset($_GET['access_token']) && isset($_GET['nickname']) && isset($_GET['account_id']) && isset($_GET['expires_at']))
    {
        $data = $wargaming->get_auth_data();

        if($data['status'] == 'ok')
        {
			session_regenerate_id();
			$_SESSION['authenticate'] = TRUE;
            $access_token = $data['data']['access_token'];
            $expires_at = $data['data']['expires_at'];
            $account_id = $data['data']['account_id'];

			$_SESSION['access_token'] =	$access_token;
			$_SESSION['expires_at'] =	$expires_at;
			$_SESSION['account_id'] =	$account_id;
			$_SESSION['status'] =	$data['status'];
	
	
			echo $_SESSION['status'];
			header('Location: ../index.php');			
	
        }
        else
        {
            exit('access_token not confirmed');
        }
    }
    else
    {
        $error_code = 500;
        if (preg_match('/^[0-9]+$/u', $_GET['code']))
        {
            $error_code = $_GET['code'];
        }
        exit("Error!. Error: $error_code");
    }

?>