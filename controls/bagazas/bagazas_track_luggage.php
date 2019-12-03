<?php

include 'libraries/bagazas.class.php';
$bagazasObj = new bagazas();

include 'libraries/keleivis.class.php';
$dataObj = new keleivis();
$keleivis = $dataObj->getKeleivisList();

include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();

if(isset($_POST['keleivis'])) {
    $keleivioBagazas = $bagazasObj->trackBaggage($_POST['keleivis']);

    foreach($keleivioBagazas as $key => $row) {
        $lektuvoInfo = $lektuvasObj->getLektuvasByID($row["fk_lektuvas_id_lektuvas"]);

        $keleivioBagazas[$key]["lektuvo_marke"] = $lektuvoInfo["marke"];
        $keleivioBagazas[$key]["lektuvo_modelis"] = $lektuvoInfo["modelis"];
    }
}

include 'templates/bagazas/bagazas_track_luggage.tpl.php';

?>