<?php

include 'libraries/darbuotojai.class.php';
$darbuotojasObj = new darbuotojai();

include 'libraries/kreditas.class.php';
$kreditasObj = new kreditas();

if(isset($_POST['kreditai'])) {
	$kaina = $kreditasObj->getKainaById($_POST['kreditai']);
	$turimi = $darbuotojasObj->getDarbuotojasByID($_POST['darbuotojas']);
	$turimi[0]['kreditai'] = $turimi[0]['kreditai'] - $kaina[0]['kreditu_kaina'];
	$darbuotojasObj->kredituNuskaiciavimas($_POST['darbuotojas'],$turimi);	
}
$visiDarbuotojai = $darbuotojasObj->getDarbuotojaiList();
$visiKreditai = $kreditasObj->getKreditasList();

include 'templates/darbuotojai/darbuotojai_kreditai.tpl.php';

?>