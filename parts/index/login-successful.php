<section>
<div class="container">	
	<div class="text-center">
		<h1 style="padding-top: 160px;"> Přihlášení bylo úspěsné </h1>
		<h4 style="padding-top: 20px;"> Vítejte <?php echo $ACCOUNT_DATA["data"][$_SESSION['account_id']]["nickname"];?><span style="font-size: 20px; color: gray;">#<?php echo $_SESSION['account_id']; ?></span></h4>
		<p style="padding-top: 90px;"></p>
			
		<a href="dashboard.php" style="text-align: center;background-color: rgba(0,0,0,0.0); border: 1px solid white; color: white; padding: 10px 20px 10px 20px;">
			Vstoupit
		</a>

	<br>
	<br>
	<br>
	<?php echo $CLAN_DATA["data"][$ACCOUNT_DATA["data"][$_SESSION['account_id']]["clan_id"]]["name"]?><span style="font-size: 20px; color: gray;">#<?php echo $ACCOUNT_DATA["data"][$_SESSION['account_id']]["clan_id"]; ?></span>

	</div>
</div>
</section>
