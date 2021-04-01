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
#about {font-weight: bold; color:white;}
</style>


<section class="about" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">			
		<div class="text-center">
			<img src="assets/img/logo-big.png" width ="15%" style="padding-bottom: 10px;">
			<div class="about-subtitle">World of Tanks</div>
			<div class="about-title">Clan Information System</div>
			<div class="about-content" style="text-align: left;">
				
				World of Tanks Clan Information System je nástroj pro zjednodušení správu klanu.<br>
				WoT CIS není vyvíjen ani financován společnosti Wargaming. Projekt je vyvíjen pod licencí GNU General Public License v3.0 viz LICENSE.<br>
				Design je inspirován officiálním portálem World of Tanks<br>
				<br>
				Použivání na vlastní riziko, autor nenese žádnou odpovědnost za vniklé škody ani za únik dat<br>
				<br>
			</div>
		</div>	
		
	</div>
</section>





<?php include "parts/footer.php";?>