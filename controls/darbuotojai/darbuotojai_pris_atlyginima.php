<?php

include 'libraries/darbuotojai.class.php';
$darbuotojasObj = new darbuotojai();

include 'libraries/atlyginimas.class.php';
$dataObj = new atlyginimas();
//$atlyginimas = $dataObj->getAtlyginimasList();

include 'libraries/skiria.class.php';
$skiriaObj = new skiria();

if(isset($_POST['atlyginimas'])) {
    $paskirstytAtlyginima = $skiriaObj->insertAtlyginimasIntoDarbuotojas($_POST['atlyginimas'], $_POST['darbuotojas']);

    if($paskirstytAtlyginima) echo "<script type='text/javascript'>alert('Sėkmingai paskirstytas atlyginimas');</script>";
    else echo "<script type='text/javascript'>alert('Atlyginimo paskirstyti nepavyko');</script>";
}

$visiDarbuotojai = $darbuotojasObj->getDarbuotojaiList();

$visiAtlyginimai = $dataObj->getAtlyginimasList();

include 'templates/darbuotojai/darbuotojai_pris_atlyginima.tpl.php';

?>