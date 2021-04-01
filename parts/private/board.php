<?php include "config/get_data_private.php";?>

<section class="poster" style="margin: 80px 0 60px 0; ">
	<div class="container">		
		
	<div class="text-center">
	
	
		<div class="row">
			
			<?php 

			for ($i = 0; $i < 3; $i++){
			
			if ($i < count($MESSAGE_BOARD['data'][$CLAN_DATA[1]])){
			echo '
				<div class="col my-auto dashboard-board-container">
					<a href="clan-board.php" style="text-decoration : none">
						<div style="">'.
						 substr($MESSAGE_BOARD['data'][$CLAN_DATA[1]][$i]['message'],0, 225). "..."
						.'</div>
					</a>
				</div>';
			} else {
				echo '
				<div class="col my-auto dashboard-board-container">
					<a href="clan-board.php" style="text-decoration : none">
						<div style="">
							<div class="text-center">
							Nic tu není
							</div>
						</div>
					</a>
				</div>';
			}			
				
			};
			
			?>
			
			
		</div>
	</div>
	</div>

</section>