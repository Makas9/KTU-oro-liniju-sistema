<?php


if (!empty($_POST["email"]) && !empty($_POST["password"])) { // form was submitted
    include 'libraries/darbuotojai.class.php';
    $dataObj = new darbuotojai();

    $result = $dataObj->isCorrectLogin($_POST["email"], $_POST["password"]);

    if ($result) {
		$_SESSION["email"] = $_POST["email"];
		$darbuotojas = $dataObj->getDarbuotojasByEmail($_POST['email']);
		$_SESSION['vardas'] = $darbuotojas['vardas'];
		$_SESSION['pavarde'] = $darbuotojas['pavarde'];
		$_SESSION['id'] = $darbuotojas['id_darbuotojas'];
		$_SESSION['role'] = $darbuotojas['role'];

		// TODO: set role (not in DB right now)
        header("Location: index.php");
        exit;
    }
    else
        $errorMsg = "Neteisingi prisijungimo duomenys!";
}

include 'templates/loginPage.tpl.php';

?>