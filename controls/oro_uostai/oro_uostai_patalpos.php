<?php

include 'libraries/patalpos.class.php';
$dataObj = new patalpos();
$data = $dataObj->getPatalpuList();

include "templates/oro_uostai/oro_uostai_patalpos_list.tpl.php";


?>