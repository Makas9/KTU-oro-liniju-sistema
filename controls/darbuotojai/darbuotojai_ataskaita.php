<?php

include 'libraries/darbuotojai.class.php';
$darbuotojasObj = new darbuotojai();

include 'libraries/keleivis.class.php';
$keleivisObj = new keleivis();

include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();

include 'libraries/cekis.class.php';
$cekisObj = new cekis();

include 'libraries/skundas.class.php';
$skundasObj = new skundas();


if(!empty(isset($_POST['id']))) {
    $zmogus = $darbuotojasObj->getDarbuotojasByID($_POST['id']);
	
    include 'templates/darbuotojai/darbuotojai_ataskaita_view.tpl.php';
} else {
    $darbuotojas = $darbuotojasObj->getDarbuotojaiList();
    include 'templates/darbuotojai/darbuotojai_ataskaita.tpl.php';
}

?>