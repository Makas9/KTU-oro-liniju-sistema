<?php


if (!empty($_POST["email"]) && !empty($_POST["password"])) { // form was submitted
    include 'libraries/darbuotojai.class.php';
    $dataObj = new darbuotojai();

    $result = $dataObj->isCorrectLogin($_POST["email"], $_POST["password"]);

    if ($result) {
        $_SESSION["email"] = $_POST["email"];
        // TODO: set role (not in DB right now)
        header("Location: index.php");
        exit;
    }
    else
        $errorMsg = "Neteisingi prisijungimo duomenys!";
}

include 'templates/loginPage.tpl.php';

?>