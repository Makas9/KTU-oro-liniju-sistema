<?php

include 'libraries/patalpos.class.php';
include 'libraries/orouostas.class.php';
include 'libraries/darbuotojai.class.php';
$patalposObj = new patalpos();
$airportsObj = new orouostas();
$darbuotojaiObj = new darbuotojai();
$data = $patalposObj->getPatalpa($_GET['id']);

if (!empty($_POST)) {
	$patalposObj->update($_GET['id'], $_POST['pavadinimas'], $_POST['plotas'], $_POST['kaina'], $_POST['nuomotojas']);
	header("Location: index.php?module=oro_uostai&action=patalpos");
}

include "templates/oro_uostai/oro_uostai_patalpos_forma.tpl.php";

?>