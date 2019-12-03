<?php

include 'libraries/patalpos.class.php';
$dataObj = new patalpos();

$data = $dataObj->getPatalpuList();

include 'templates/patalpos/patalpos_list.tpl.php';

?>