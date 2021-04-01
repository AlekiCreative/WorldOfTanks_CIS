<style>
.notifications {
   min-width:420px; 
  }
 
.notifications-wrapper {
    overflow:auto;
    max-height:850px;
    }
.notification-item {
	padding-left: 5px;
	margin:5px;
	border-left: 4px solid ;
	border-radius:4px;
 }
.notification-item.warnig {
	border-color: #F18000;
}
.notification-item.successfully {
	border-color: #28a745;
}
.notification-item.danger {
	border-color: #dc3545;
}

</style>


<!-- Začátek Navigační lišty-->
        <div class="navigation">
            <nav class="navbar fixed-top navbar-expand-lg ">
              <a class="navbar-brand" href="https://eu.wargaming.net/en" target="_blank"><img src="//cm-eu.wargaming.net/media/public/img/4Fy2RVj9RmCO2LlF6KIbEw.svg" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="mr-auto"></ul>
                <ul class="navbar-nav">
				
				  <!-- Date -->
				
                  <li class="nav-item" id="date">
                    <a class="nav-link" href="#"><?php echo(date("d. ") . date("F ") . date("Y"));?></a>
                  </li>

            <li class="nav-item" id="username">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $ACCOUNT_DATA[3]; ?></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index.php">Index Page</a>
							<a class="dropdown-item" href="https://worldoftanks.eu/cs/community/accounts/<?php echo $ACCOUNT_DATA[1]; ?>-<?php echo $ACCOUNT_DATA[3]; ?>/" target="_blank"><i class="fas fa-user"></i> WoT Profile</a>
							<a class="dropdown-item" href="https://eu.wargaming.net/clans/wot/<?php echo $CLAN_DATA[1]?>/" target="_blank"><i class="fas fa-users"></i> WoT Clan</a>
							<a class="dropdown-item" href="config/logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a>
						</div>
				  </li>
                  
                    <span class="" style="width: 80px;">
                    </span>
                </ul>
              </div>
            </nav>
            </div>
            
    
            
   
        <!-- Konec Navigační lišty -->