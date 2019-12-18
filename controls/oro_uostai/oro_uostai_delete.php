<?php

include 'libraries/orouostas.class.php';
$dataObj = new orouostas();

$dataObj->deleteAirport($_GET['id']);

header("Location: index.php?module=oro_uostai&action=list_actions");

?>