<div class="menu">
            <div class="sidenav">
            <ul>
                <li><a href="#" class="menu_list">Dashboard</a></li>
                               
				<div class="menu_list dropdown-btn">alik_99</div>
				<div class="dropdown-container">
					<ul class="">
						<li><a href="#" class="menu_sublist active" id="active"> Dashboard</a></li>
						<li><a href="#" class="menu_sublist" id="active"> Garáž</a></li>
						<li><a href="#" class="menu_sublist" id="active"> Kontakty</a></li>
						<li><a href="#" class="menu_sublist" id="active"> Kampaň</a></li>
						<li><a href="#" class="menu_sublist" id="active"> Ban list</a></li>
					</ul>
				</div>
				
				
				<div class="menu_list dropdown-btn"><img src="https://eu.wargaming.net/clans/media/clans/emblems/cl_145/500164145/emblem_24x24.png" width="18px" height="18px"> Klan CSSTB</div>
				<div class="dropdown-container">
					<ul class="">				
						<li><a href="#" class="menu_sublist" id="active"> Dashboard</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Vývěšká</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Pravidla</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Personál</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Eventy</a></li>
						<li><a href="#" class="menu_sublist" id="active"> Hodnocení</a></li>
						<li><a href="#" class="menu_sublist" id="active"> Timeline</a></li>
					</ul>
				</div>
				
				<div class="menu_list dropdown-btn">Tankopedie</div>
				<div class="dropdown-container">
					<ul class="">				
						<li><a href="#" class="menu_sublist" id="active"> Seznam vozidel</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Mapy</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Posádka</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Úspěchy</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Osobní mise</a></li>
					</ul>
				</div>
				<div class="menu_list dropdown-btn">Statistika</div>
				<div class="dropdown-container">
					<ul class="">				
						<li><a href="#" class="menu_sublist" id="active"> Dashboard</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Osobní</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Klanový</a></li>           
						<li><a href="#" class="menu_sublist" id="active"> Vyhledat</a></li>                   
					</ul>
				</div>
				
				<li><a href="#" class="menu_list" id=""> Discord managment</a></li>
				<li><a href="#" class="menu_list" id=""> Nastavení</a></li>
				
				
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