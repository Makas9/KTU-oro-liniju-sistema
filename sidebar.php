<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">
                  <span data-feather="home"></span>
                  Pagrindinis
                </a>
              </li>
			  <?php
				if($_SESSION["role"] == "Administratorius"){
					?>
				  <li class="nav-item">
					<a class="nav-link active" href="user_center.php">
					  <span data-feather="users"></span>
					  Administratorius
					</a>
				  </li>
				  <?php
				}
				if ($_SESSION["role"] == "Darbuotojas"){
					?>
				  <li class="nav-item">
					<a class="nav-link active" href="#">
					  <span data-feather="users"></span>
					  Darbuotojas
					</a>
				  </li>
				  <?php
				}
				if ($_SESSION["role"] == "Klientas"){
					?>
				  <li class="nav-item">
					<a class="nav-link active" href="#">
					  <span data-feather="file"></span>
					  Klientas
					</a>
				  </li>
				  <?php
				}
			  ?>
            </ul>
          </div>
        </nav>