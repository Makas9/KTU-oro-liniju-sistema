<?php
require("pdo.php");

session_start();

if(!isset($_SESSION["email"])){
	header("location: index.php");
	exit;
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Oro linijų vidinė sistema</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/sidebar.css">
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Prisijungta kaip: <?php echo $_SESSION["role"]; ?></a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Atsijungti</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include("sidebar.php"); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Pagrindinis</h1>
          </div>

          <h5>Peržiūrėti sąskaitas</h5>
        </main>
      </div>
    </div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>

	</html>