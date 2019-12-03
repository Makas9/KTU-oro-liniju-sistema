<?php

include 'libraries/patalpos.class.php';
$dataObj = new patalpos();

$formErrors = null;
$data = array();

// nustatome privalomus laukus
/*$required = array('name');

// maksimalūs leidžiami laukų ilgiai
$maxLengths = array (
	'name' => 255
);*/

// paspaustas išsaugojimo mygtukas
if(!empty($_POST['submit'])) {
	// nustatome laukų validatorių tipus
	/*$validations = array (
		'name' => 'anything');

	// sukuriame validatoriaus objektą
	include 'utils/validator.class.php';
	$validator = new validator($validations, $required, $maxLengths);*/

	//if($validator->validate($_POST)) {
		// suformuojame laukų reikšmių masyvą SQL užklausai
		//$dataPrepared = $validator->preparePostFieldsForSQL();

		// įrašome naują įrašą
                //$countriesObj->insertCountry($dataPrepared);
                $dataObj->insertPatalpa($_POST);

		// nukreipiame į markių puslapį
		header("Location: index.php?module={$module}&action=list");
		die();
	//} else {
		// gauname klaidų pranešimą
		//$formErrors = $validator->getErrorHTML();
		// gauname įvestus laukus
		//$data = $_POST;
	//}
}

// įtraukiame šabloną
include 'templates/patalpos/patalpos_form.tpl.php';

?>