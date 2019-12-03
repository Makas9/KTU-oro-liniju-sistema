<?php

include 'libraries/keleivis.class.php';
$dataObj = new keleivis();
$keleivis = $dataObj->getKeleivisList();

include 'libraries/ypatybe.class.php';
$ypatybesObj = new ypatybe();

if(!empty($_POST)) {
    $successCount = 0;
    $totalCount = 0;
    foreach($_POST as $key => $value) {
        if($ypatybesObj->updateYpatybeByName($key, $value)) $successCount++;
        $totalCount++;
    }

    if($successCount == $totalCount) echo "<script type='text/javascript'>alert('Visos reikšmės atnaujintos sėkmingai');</script>";
    else echo "<script type='text/javascript'>alert('Visų reikšmių atnaujinti nepavyko');</script>";
}

$ypatybes = $ypatybesObj->getYpatybeList();
$sumaPerKg = $ypatybesObj->getYpatybeMultiplierByName("sumaPerKg");
$sumaPerCm = $ypatybesObj->getYpatybeMultiplierByName("sumaPerCm");

include 'templates/bagazas/bagazas_update_prices.tpl.php';

?>