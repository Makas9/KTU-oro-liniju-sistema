<?php

include 'libraries/bagazas.class.php';
$bagazasObj = new bagazas();

include 'libraries/keleivis.class.php';
$dataObj = new keleivis();
$keleivis = $dataObj->getKeleivisList();

include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();

if(isset($_POST['bagazas'])) {
    $paskirstytasBagazas = $bagazasObj->insertLuggageIntoPlane($_POST['lektuvas'], $_POST['bagazas']);

    if($paskirstytasBagazas) echo "<script type='text/javascript'>alert('Sėkmingai paskirstytas bagažas');</script>";
    else echo "<script type='text/javascript'>alert('Bagažo paskirstyti nepavyko');</script>";
}

$visiLektuvai = $lektuvasObj->getLektuvasList();

$nepakrautiLagaminai = $bagazasObj->getEmptyLuggageList();

include 'templates/bagazas/bagazas_distribute_luggage.tpl.php';

?>