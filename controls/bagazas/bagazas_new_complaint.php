<?php

include 'libraries/keleivis.class.php';
$dataObj = new keleivis();
$keleivis = $dataObj->getKeleivisList();

include 'libraries/skundas.class.php';
$skundasObj = new skundas();

include 'libraries/darbuotojai.class.php';
$darbuotojasObj = new darbuotojai();

if(isset($_POST['keleivis'])) {
    $skundas = $skundasObj->newSkundas($_POST['keleivis'], $darbuotojasObj->getIDByEmail($_SESSION["email"]));

    if($skundas) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas skundas');</script>";
    else echo "<script type='text/javascript'>alert('Skundo įterpti nepavyko');</script>";
}

include 'templates/bagazas/bagazas_new_complaint.tpl.php';

?>