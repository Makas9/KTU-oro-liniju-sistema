<?php



//---------------------------



include 'libraries/marsrutas.class.php';
$dataObj = new marsrutas();
$visiMarsrutai = $dataObj->getMarsrutaiList();

include 'libraries/bilietas.class.php';
$bilietasObj = new bilietas();

if(isset($_POST['kaina'])) {

    $naujasBilietas = $bilietasObj->newBilietas($_POST['kaina'], $_POST['isvykimo_data'], $_POST['fk_marsrutas_id_marsrutas']);

    if($naujasBilietas) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas bilietas');</script>";
    else echo "<script type='text/javascript'>alert('Keleivio įterpti nepavyko');</script>";
}

include 'templates/marsrutai/marsrutai_new_bilietas.tpl.php';

?>