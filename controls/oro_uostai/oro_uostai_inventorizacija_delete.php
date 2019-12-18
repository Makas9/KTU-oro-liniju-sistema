<?php

include 'libraries/daiktas.class.php';
$daiktuObj = new daiktas();

$daiktuObj->delete($_GET['id']);

header("Location: index.php?module=oro_uostai&action=inventorizacija");

?>