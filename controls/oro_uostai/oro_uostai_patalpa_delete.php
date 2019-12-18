<?php

include 'libraries/patalpos.class.php';
$patalpaObj = new patalpos();

$patalpaObj->delete($_GET['id']);

header("Location: index.php?module=oro_uostai&action=patalpos");

?>