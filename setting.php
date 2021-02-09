
<?php include "parts/header.php";?>
<?php include "parts/navigation.php";?>
<?php include "parts/sidebar.php";?>

<style>
#setting {font-weight: bold; color:white;}
</style>


<section class="setting" style="padding-top:  80px; color: white; margin-bottom: 10px;">
	<div class="container">
		<h1>Všeobecné</h1>
			<div>Ukládaní osobních statistik </div>
			<div>
				<select style="float: left;">
					<option value="disabled">Zakázano</option>
					<option value="enable" disabled title="Funkce se připravuje">Povoleno</option>
				</select>
				<div style="color: #e83e3e; font-size: 12px; cursor: pointer; float: left; padding-left: 15px; padding-top: 3px;" title="Funkce se připravuje"> Smazat uložená data</div>
			</div>
			<div class="clear"></div>
			
			<p></p>	
			<div>Grafický režim</div>
			<select>
				<option value="dark">Tmavý</option>
				<option value="light" disabled title="Funkce se připravuje">Světlý</option>
			</select>
			<p></p>	
			<div>Hlavní stránka - Dashboard</div>
			<select>
				<option value="default">Výchozí</option>
				<option value="clan" disabled title="Funkce se připravuje">Klanový</option>
				<option value="personal" disabled title="Funkce se připravuje">Osobní</option>
				<option value="personal" disabled title="Funkce se připravuje">Vlastní</option>
			</select>
			<p></p>	
			
	</div>
</section>

<div style="height: 400px;"></div>



<?php include "parts/footer.php";?>