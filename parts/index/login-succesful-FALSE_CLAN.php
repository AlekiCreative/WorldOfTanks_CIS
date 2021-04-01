<section>
<div class="container">	
	<div class="text-center">
		<h1 style="padding-top: 160px;"> Přihlášení bylo úspěsné </h1>
		<h4 style="padding-top: 20px;"> Vítejte <?php echo $ACCOUNT_DATA["data"][$_SESSION['account_id']]["nickname"];?> </h4>
		<p style="padding-top: 90px;"></p>
			
		<p style="text-align: center;background-color: rgba(0,0,0,0.0); color: white; padding: 10px 20px 10px 20px;">
			Vstup do CIS na tehlé adrese je umožnem pouze klanům:    
		</p>
        <p style="text-align: center;background-color: rgba(0,0,0,0.0); color: white; padding: 10px 20px 10px 20px;">
            <?php 
            
            for ($a = 0; $a < count($allowed_clan); $a++){
                echo $allowed_clan[$a]."<br>";
            } 
            
            
            ?>    
		</p>
        

	<br>
	<br>
	Jste součástí klanu: 
    <br>
	<?php echo $CLAN_DATA["data"][$ACCOUNT_DATA["data"][$_SESSION['account_id']]["clan_id"]]["name"]?><span style="font-size: 20px; color: gray;">#<?php echo $ACCOUNT_DATA["data"][$_SESSION['account_id']]["clan_id"]; ?></span>

	</div>
</div>
</section>
