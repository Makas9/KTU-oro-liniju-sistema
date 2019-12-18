<?php

include 'libraries/daiktas.class.php';
include 'libraries/orouostas.class.php';
$daiktuObj = new daiktas();
$airportsObj = new orouostas();

if (!empty($_POST)) {
	$daiktuObj->insertNew($_POST['pavadinimas'], $_POST['kiekis'], $_POST['kaina'], $_POST['oro_uostas']);
}

$data = [];
if (isset($_GET['airport']))
	$data = $daiktuObj->getByAirport($_GET['airport']);
else 
	$data = $daiktuObj->getAllEntries();

include "templates/oro_uostai/oro_uostai_inventorizacija.tpl.php";

?>