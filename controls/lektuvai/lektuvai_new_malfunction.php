<?php



include 'libraries/remontas.class.php';
$remontasObj = new remontas();

if(isset($_POST['registravimo_data'])) {

    $naujasRemontas = $remontasObj->newRemontas($_POST['registravimo_data'], $_POST['gedimo_aprasas'], $_POST['remonto_aprasas'], $_POST['remonto_data']);

    if($naujasRemontas) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas remontas');</script>";
    else echo "<script type='text/javascript'>alert('Remonto įterpti nepavyko');</script>";
}

include 'templates/lektuvai/lektuvai_new_malfunction.tpl.php';

?>