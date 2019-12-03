<?php

include 'libraries/bagazas.class.php';
$dataObj = new bagazas();

$data = $dataObj->getLuggageList();

include 'templates/bagazas/bagazas_index.tpl.php';

?>