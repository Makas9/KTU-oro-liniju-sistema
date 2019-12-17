<?php


include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();

include 'libraries/remontas.class.php';
$remontasObj = new remontas();


include 'libraries/darbuotojai.class.php';
$darbuotojasObj = new darbuotojai();

if(!empty(isset($_POST['id']))) {
   
    $lektuvas = $lektuvasObj->getLektuvasByID($_POST['id']);
	 $remontas = $remontasObj->getRemontasByID($lektuvas['fk_remontas_id_remontas']);
    include 'templates/lektuvai/lektuvai_aircraft_view_view.tpl.php';
}

    $visiLektuvas = $lektuvasObj->getLektuvasList();
    include 'templates/lektuvai/lektuvai_aircraft_view.tpl.php';


?>