<div class="menu">
            <div class="sidenav">
            <ul>
                <li id="dashboard"><a href="dashboard.php" class="menu_list" id="dashboard">Dashboard</a></li>
                               
				<div class="menu_list dropdown-btn" id="player"><?php echo $_SESSION['nickname'];?></div>
				<div class="dropdown-container">
					<ul class="">
						<li id="player-dashboard"><a href="player-dashboard.php" class="menu_sublist" id="active"> Dashboard</a></li>
						<li id="player-garage"><a href="player-garage.php" class="menu_sublist" id="active"> Garáž</a></li>
						<!--
						<li id="player-booster"><a href="player-booster.php" class="menu_sublist" id="active"> Zálohy</a></li>
						<li id="player-achievements"><a href="player-achievements.php" class="menu_sublist" id="active"> Úspěchy</a></li>
						<li id="player-contact"><a href="player-contact.php" class="menu_sublist" id="active"> Kontakty</a></li>
						<li id="player-campain"><a href="player-campain.php" class="menu_sublist" id="active"> Kampaň</a></li>
						<li id="player-bans"><a href="player-bans.php" class="menu_sublist" id="active"> Ban list</a></li>-->
					</ul>
				</div>
				
				
				<div class="menu_list dropdown-btn" id="clan">
					<img src="<?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['emblems']['x24']['portal']; ?>" width="18px" height="18px"> 
					Klan <?php echo $_SESSION['CLAN_DATA']['data'][$_SESSION['clan_id']]['tag']; ?>
				</div>
				<div class="dropdown-container">
					<ul class="">				
						<li id="clan-dashboard"><a href="clan-dashboard.php" class="menu_sublist" id="active"> Dashboard</a></li>           
						<li id="clan-board"><a href="clan-board.php" class="menu_sublist" id="active"> Vývěšká</a></li>           
						<li id="clan-personal"><a href="clan-personal.php" class="menu_sublist" id="active"> Personál</a></li>  
						<!--
						<li id="clan-rules"><a href="clan-rules.php" class="menu_sublist" id="active"> Pravidla</a></li>           
						<li id="clan-events"><a href="clan-events.php" class="menu_sublist" id="active"> Eventy</a></li>
						<li id="clan-rating"><a href="clan-rating.php" class="menu_sublist" id="active"> Hodnocení</a></li>
						-->
					</ul>
				</div>
				
				<!--
				<div class="menu_list dropdown-btn" id="tankopedie">Tankopedie</div>
				<div class="dropdown-container">
					<ul class="">				
						<li id="tankopedie-vehicles"><a href="tankopedie-vehicles.php" class="menu_sublist" id="active"> Seznam vozidel</a></li>           
						<li id="tankopedie-maps"><a href="tankopedie-maps.php" class="menu_sublist" id="active"> Mapy</a></li>           
						<li id="tankopedie-crews"><a href="tankopedie-crews.php" class="menu_sublist" id="active"> Posádka</a></li>           
						<li id="tankopedie-achievements"><a href="tankopedie-achievements.php" class="menu_sublist" id="active"> Úspěchy</a></li>           
						<li id="tankopedie-campain"><a href="tankopedie-campain.php" class="menu_sublist" id="active"> Osobní mise</a></li>
					</ul>
				</div>
				-->
				<!--
				<div class="menu_list dropdown-btn" id="statistika">Statistika</div>
				<div class="dropdown-container">
					<ul class="">				
						<li id="statistic-dashboard"><a href="statistic-dashboard.php" class="menu_sublist" id="active"> Dashboard</a></li>           
						<li id="statistic-personal"><a href="statistic-personal.php" class="menu_sublist" id="active"> Osobní</a></li>           
						<li id="statistic-clan"><a href="statistic-clan.php" class="menu_sublist" id="active"> Klanový</a></li>           
						<li id="statistic-find"><a href="statistic-find.php" class="menu_sublist" id="active"> Vyhledat</a></li>                   
					</ul>
				</div>
				-->
				
				<!--<li id="discord-managment"><a href="#" class="menu_list" > Discord managment</a></li>-->
				<li id="setting"><a href="setting.php" class="menu_list" > Nastavení</a></li>
				<li id="about"><a href="about.php" class="menu_list"> O Projektu</a></li>
				
				
            </ul>
            </div> 
			<script>
			/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.display === "block") {
				  
			  dropdownContent.style.display = "none";
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}
			</script>			

</div>