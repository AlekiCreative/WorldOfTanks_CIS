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

<style>

.col {font-family: "Roboto Condensed", Arial, "Helvetica Neue", Helvetica, sans-serif;}
.main-info .col span{font-size: 40px; font-weith: 700;}
.clan-stat .col span{font-size: 30px; font-weith: 700;}
#player a,#player-dashboard a{font-weight: bold!important; color:white!important;}

</style>


<?php include 'dashboards/personal.php';?>

<?php include "parts/footer.php";?>


