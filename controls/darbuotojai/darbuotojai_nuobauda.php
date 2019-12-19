<?php

include 'libraries/darbuotojai.class.php';
$dataObj = new darbuotojai();
$darbuotojai = $dataObj->getDarbuotojaiList();

include 'libraries/nuobauda.class.php';
$nuobaudaObj = new nuobauda();

if(isset($_POST['nuo_darbuotojas'])) {
    $nuobauda = $nuobaudaObj->newNuobauda($_POST['date'],$_POST['priezastis']);

    if($nuobauda) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas nuobauda');</script>";
    else echo "<script type='text/javascript'>alert('Nuobaudos įterpti nepavyko');</script>";

	$prideti = $dataObj->updateNuobauda($_POST['nuo_darbuotojas'], $nuobauda);

	if($prideti) echo "<script type='text/javascript'>alert('Sėkmingai darbuotojui prideta nuobauda');</script>";
    else echo "<script type='text/javascript'>alert('Nuobaudos prideti nepavyko');</script>";
	
}

include 'templates/darbuotojai/darbuotojai_nuobauda.tpl.php';

?>