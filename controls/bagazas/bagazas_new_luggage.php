<?php

include 'libraries/bagazas.class.php';
$bagazasObj = new bagazas();

include 'libraries/cekis.class.php';
$cekisObj = new cekis();

include 'libraries/keleivis.class.php';
$dataObj = new keleivis();
$keleivis = $dataObj->getKeleivisList();

include 'libraries/ypatybe.class.php';
$ypatybeObj = new ypatybe();
$ypatybe = $ypatybeObj->getYpatybeList();

include 'libraries/lektuvas.class.php';
$dataObj = new lektuvas();
$lektuvas = $dataObj->getLektuvasList();

if(isset($_POST['aukstis'])) {
    $bagazoKaina = $cekisObj->generateLuggagePrice($_POST['aukstis'], $_POST['ilgis'], $_POST['plotis'], $_POST['svoris'], $ypatybeObj->getYpatybeMultiplierByID($_POST['ypatybe'])["koeficientas"]);
    $naujasCekisID = $cekisObj->createNewCekis($_POST['keleivis'], $bagazoKaina);

    $naujasBagazas = $bagazasObj->newBaggage($_POST['aukstis'], $_POST['ilgis'], $_POST['plotis'], $_POST['svoris'], $_POST['ypatybe'], $_POST['keleivis'], $naujasCekisID);

    if($naujasBagazas) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas bagažas');</script>";
    else echo "<script type='text/javascript'>alert('Bagažo įterpti nepavyko');</script>";
}

include 'templates/bagazas/bagazas_new_luggage.tpl.php';

?>