<?php

include 'libraries/orouostas.class.php';
$dataObj = new orouostas();

if (!empty($_POST)) {
	$dataObj->insertNewAirport($_POST['salis'], $_POST['miestas'], $_POST['pavadinimas'], $_POST['koordinates']);
	header("Location: index.php?module=oro_uostai&action=list_actions");
}

include "templates/oro_uostai/oro_uostai_form.tpl.php";

?>