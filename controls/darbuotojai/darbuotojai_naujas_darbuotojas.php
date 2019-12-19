<?php

include 'libraries/darbuotojai.class.php';
$darbuotojasObj = new darbuotojai();


if(isset($_POST['vardas'])) {

    $naujasDarbuotojas = $darbuotojasObj->newDarbuotojas(
	$_POST['vardas'], $_POST['pavarde'], $_POST['date'], $_POST['asmens_kodas'],
	$_POST['telefonas'], $_POST['e_pastas'], $_POST['miestas'],$_POST['bankas'],
	$_POST['sas_nr'], $_POST['kreditai'], $_POST['pass']);

    if($naujasDarbuotojas) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas darbuotojas');</script>";
    else echo "<script type='text/javascript'>alert('Darbuotojo įterpti nepavyko');</script>";
}


include 'templates/darbuotojai/darbuotojai_naujas_darbuotojas.tpl.php';

?>