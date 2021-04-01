            <div class="row">
				<div class="col my-auto">
				</div>
				<div class="col my-auto">
					<div style=" font-size: 14px; ">Dny Premium </div>
					<div style=" font-size: 16px; "><?php echo $ACCOUNT_DATA_PRIVATE["data"][$_SESSION['account_id']]["private"]["is_premium"]; ?> <img src="assets/img/premium.png" width="15px" height="13px"></div>
				</div>
				<div class="col my-auto" style="">
					<div style=" font-size: 14px; ">Zlaťáky</div>
					<div style=" font-size: 16px; "><?php echo number_format($ACCOUNT_DATA_PRIVATE["data"][$_SESSION['account_id']]["private"]["gold"], 0,"" ," "); ?> <img src="assets/img/gold.png" width="13" height="11"></div>
				</div>
				
				<div class="col">
					<div style=" font-size: 15px; font-weith: 700; "> Kredity</div>
					<div style=" font-size: 18px; font-weith: 700; "> <?php echo number_format($ACCOUNT_DATA_PRIVATE["data"][$_SESSION['account_id']]["private"]["credits"], 0,"" ," "); ?> <img src="assets/img/credit.png" width="13" height="11"></div>
				</div>
				
				<div class="col my-auto">
					<div style=" font-size: 14px; ">Bony </div>
					<div style=" font-size: 16px; "><?php echo number_format($ACCOUNT_DATA_PRIVATE["data"][$_SESSION['account_id']]["private"]["bonds"], 0,"" ," "); ?> <img src="assets/img/bony.png" width="13" height="11"></div>
				</div>
				<div class="col my-auto">
					<div style=" font-size: 14px; ">Volný XP </div>
					<div style=" font-size: 16px; "><?php echo number_format($ACCOUNT_DATA_PRIVATE["data"][$_SESSION['account_id']]["private"]["free_xp"], 0,"" ," "); ?><img src="assets/img/xp.png" width="15" height="13"></div>
				</div>
				<div class="col my-auto">
				</div>
			</div>