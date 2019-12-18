<?php

include 'libraries/praejimo_kontrole.class.php';
include 'libraries/orouostas.class.php';
$praejimoKontrObj = new praejimo_kontrole();
$airportsObj = new orouostas();

if (!empty($_POST)) {
	$praejimoKontrObj->insertNew($_POST['keleivis'], $_POST['oro_uostas'], $_POST['vartai']);
}

$data = [];
if (isset($_GET['airport']))
	$data = $praejimoKontrObj->getByAirport($_GET['airport']);
else 
	$data = $praejimoKontrObj->getAllEntries();
	
include "templates/oro_uostai/oro_uostai_praejimo_kontrole.tpl.php";

?>