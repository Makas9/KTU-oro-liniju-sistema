<?php

include 'libraries/orouostas.class.php';
$dataObj = new orouostas();
$data = $dataObj->getOroUostaiList();

include "templates/oro_uostai/oro_uostai_list_actions.tpl.php";

?>