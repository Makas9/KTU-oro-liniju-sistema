<?php

include "libraries/marsrutas.class.php";
include "libraries/tvarkarasciai.class.php";
$marsrutuObj = new marsrutas();
$tvarkarasciuObj = new tvarkarasciai();

if (!empty($_POST)) {
	$tvarkarasciuObj->insertNew($_POST['laikas'], $_POST['marsrutas']);
}

$dataPast = [];
$dataUpcoming = [];

if (isset($_GET['vieta'])) {
	$dataPast = $tvarkarasciuObj->getPastFlights($_GET['vieta']);
	$dataUpcoming = $tvarkarasciuObj->getUpcomingFlights($_GET['vieta']);
} else {
	$dataPast = $tvarkarasciuObj->getPastFlights();
	$dataUpcoming = $tvarkarasciuObj->getUpcomingFlights();
}


include "templates/oro_uostai/oro_uostai_tvarkarasciai_list.tpl.php";

?>