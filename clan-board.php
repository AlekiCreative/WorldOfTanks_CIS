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
<style>

.col {font-family: "Roboto Condensed", Arial, "Helvetica Neue", Helvetica, sans-serif;}
.clan-board .col span{font-size: 55px; font-weith: 700;}
.clan-stat .col span{font-size: 30px; font-weith: 700;}
.poster .col div:hover{background-color: rgba(255, 255, 255, 0.08);transition: background .2s; text-decoration: none; color: white }
.poster .col div{text-decoration: none; color: white;}
#clan-board {font-weight: bold; color:white;}
</style>


<section class="clan-board" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<div class="text-center">
			<div class="clan-board-title">Vývěška CSSTB</div>
		</div>	
		
		<?php 
			
			for ($i = 0; $i <= count($_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']])-1; $i++){
			
			
			echo '
				<div class="board-container" style="">
				<div class="board-content">
				
				'.$_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']][$i]['message'].'
					
				</div>
						
				<div class="board-footer">
					 <span class="author">'.getNickPlayer($_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']][$i]['author_id']).'</span>
					 <span class="date">'.date("d. m. Y, H:i", $_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']][$i]['created_at']).'</span>';
					 
 			if($_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']][$i]['updated_at'] != null){ echo '<span class="update">Aktualizováno:'.date("d. m. Y, H:i", $_SESSION['MESSAGE_BOARD']['data'][$_SESSION['clan_id']][$i]['created_at']).'</span>';}

			echo
				'</div>
				</div>';
				
			};
			
			?>
			
		

		
	</div>
</section>





<?php include "parts/footer.php";?>