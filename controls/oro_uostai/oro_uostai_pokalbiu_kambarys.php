<?php

include 'libraries/pokalbiu_kambarys.class.php';
$dataObj = new pokalbiu_kambarys();
$data = $dataObj->getAllMessages();

if (!empty($_POST)) {
	$dataObj->insertNewMessage($_SESSION['id'], $_POST['textInput']);
	$data = $dataObj->getAllMessages();
}

include "templates/oro_uostai/oro_uostai_pokalbiu_kambarys.tpl.php";

?>