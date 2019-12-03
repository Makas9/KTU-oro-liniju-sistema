<?php


if (!empty($_POST["email"]) && !empty($_POST["password"])) { // form was submitted
    include 'libraries/darbuotojai.class.php';
    $dataObj = new darbuotojai();

    $result = $dataObj->canRegister($_POST["email"], $_POST["password"]);

    if ($result) {
        $data = $dataObj->register($_POST["email"], $_POST["password"]);
		
		if($data) {
			header("Location: index.php");
			exit;
		}
		else {
			$errorMsg = "Nepavyko užregistruoti vartotojo!";
		}
    }
    else
        $errorMsg = "Vartotojas su šiuo el. paštu jau užregistruotas!";
}

include 'templates/registerPage.tpl.php';

?>