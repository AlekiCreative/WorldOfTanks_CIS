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

#dashboard a{font-weight: bold; color:white;}
</style>




<?php 
	include "dashboards/clan.php";
?>




<?php include "parts/footer.php";?>