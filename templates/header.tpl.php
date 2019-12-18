<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Avialinijų IS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Pagrindinis</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
				Oro uostai
			</a>
			<div class="dropdown-menu"><?php
				printer::navDropdownItem("oro_uostai", "list_actions", "Oro uostų sąrašas");
				printer::navDropdownItem("oro_uostai", "naujas", "Sukurti naują oro uostą");
				printer::navDropdownItem("oro_uostai", "inventorizacija", "Daiktų inventorizacija");
				printer::navDropdownItem("oro_uostai", "patalpos", "Patalpų nuoma");
				printer::navDropdownItem("oro_uostai", "pokalbiu_kambarys", "Pokalbių kambarys");
				printer::navDropdownItem("oro_uostai", "praejimo_kontrole", "Praėjimo kontrolė");
				printer::navDropdownItem("oro_uostai", "tvarkarasciai", "Tvarkaraščiai");
			?></div>
		</li>

		<?php
			printer::navItem("bagazas", "index", "Bagažas");
			printer::navItem("marsrutai", "index", "Maršrutai");
			printer::navItem("lektuvai", "index", "Lėktuvai");
			printer::navItem("login", "log_out", "Atsijungti");
		?>
    </ul>
  </div>
</nav>