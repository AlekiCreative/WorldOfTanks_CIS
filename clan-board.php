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
<?php include "config/get_data_private.php";?>

<style>

.col {font-family: "Roboto Condensed", Arial, "Helvetica Neue", Helvetica, sans-serif;}
.clan-board .col span{font-size: 55px; font-weith: 700;}
.clan-stat .col span{font-size: 30px; font-weith: 700;}
.poster .col div:hover{background-color: rgba(255, 255, 255, 0.08);transition: background .2s; text-decoration: none; color: white }
.poster .col div{text-decoration: none; color: white;}
#clan-board a{font-weight: bold; color:white;}
</style>


<section class="clan-board" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<div class="text-center">
			<div class="clan-board-title">Vývěška CSSTB</div>
		</div>	
		
		<?php 
			for ($i = 0; $i < count($MESSAGE_BOARD['data'][$CLAN_DATA[1]]); $i++){			
			echo '
				<div class="board-container" style="">
				<div class="board-content">
				
				'.$MESSAGE_BOARD['data'][$CLAN_DATA[1]][$i]['message'].'
					
				</div>
						
				<div class="board-footer">
					 <span class="author">'.getNickPlayer($MESSAGE_BOARD['data'][$CLAN_DATA[1]][$i]['author_id']).'</span>
					 <span class="date">'.date("d. m. Y, H:i", $MESSAGE_BOARD['data'][$CLAN_DATA[1]][$i]['created_at']).'</span>';
					 
 			if($MESSAGE_BOARD['data'][$CLAN_DATA[1]][$i]['updated_at'] != null){ echo '<span class="update">Aktualizováno:'.date("d. m. Y, H:i", $MESSAGE_BOARD['data'][$CLAN_DATA[1]][$i]['created_at']).'</span>';}

			echo
				'</div>
				</div>';
				
			};
			
			?>
			
		

		
	</div>
</section>





<?php include "parts/footer.php";?>