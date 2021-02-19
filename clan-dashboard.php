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
<?php include "parts/navigation.php";?>
<?php include "parts/sidebar.php";?>
<?php include 'config/config.php';?>



<?php include 'dashboards/clan.php';?>







<?php include "parts/footer.php";?>


