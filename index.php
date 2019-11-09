<?php

require("pdo.php");

session_start();

if(isset($_SESSION["email"])){
	header("location: home.php");
	exit;
}

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Oro linijų vidinė sistema</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js"></script>
		<style>
			html,
			body {
			  height: 100%;
			}

			body {
			  display: -ms-flexbox;
			  display: -webkit-box;
			  display: flex;
			  -ms-flex-align: center;
			  -ms-flex-pack: center;
			  -webkit-box-align: center;
			  align-items: center;
			  -webkit-box-pack: center;
			  justify-content: center;
			  padding-top: 40px;
			  padding-bottom: 40px;
			  background-color: #f5f5f5;
			}

			.form-signin {
			  width: 100%;
			  max-width: 330px;
			  padding: 15px;
			  margin: 0 auto;
			}
			.form-signin .checkbox {
			  font-weight: 400;
			}
			.form-signin .form-control {
			  position: relative;
			  box-sizing: border-box;
			  height: auto;
			  padding: 10px;
			  font-size: 16px;
			}
			.form-signin .form-control:focus {
			  z-index: 2;
			}
			.form-signin input[type="email"] {
			  margin-bottom: -1px;
			  border-bottom-right-radius: 0;
			  border-bottom-left-radius: 0;
			}
			.form-signin input[type="password"] {
			  margin-bottom: 10px;
			  border-top-left-radius: 0;
			  border-top-right-radius: 0;
			}
		</style>
    </head>

    <body class="text-center">
    <form method="POST" action="login.php" class="form-signin">
	<div>
		<h3>Oro linijų vidinė sistema</h3>
		<h6>Autoriai...</h6>
	</div>
      <label for="inputEmail" class="sr-only">El. paštas</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="El. paštas" required autofocus>
      <label for="inputPassword" class="sr-only">Slaptažodis</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Slaptažodis" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Prisijungti</button>
    </form>
  </body>

	</html>