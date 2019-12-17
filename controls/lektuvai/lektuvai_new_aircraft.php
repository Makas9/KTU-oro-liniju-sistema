<?php


include 'libraries/remontas.class.php';
$remontasObj = new remontas();

include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();

if(isset($_POST['marke'])) {

    $naujasLektuvas = $lektuvasObj->newLektuvas($_POST['max_kuras'], $_POST['kuras'], $_POST['bagazo_talpa'], $_POST['max_keleiviai'], $_POST['modelis'], $_POST['marke'], $_POST['fk_remontas_id_remontas']);

    if($naujasLektuvas) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas lėktuvas');</script>";
    else echo "<script type='text/javascript'>alert('Lektuvo įterpti nepavyko');</script>";
}

$visiRemontas = $remontasObj->getRemontasList();

include 'templates/lektuvai/lektuvai_new_aircraft.tpl.php';

?>