<?php



//-------------------------------------

include 'libraries/marsrutas.class.php';
$dataObj = new marsrutas();
$marsrutaiObj = $dataObj->getMarsrutaiList();

if(!empty(isset($_POST['id']))) {
    $marsrutass = $dataObj->getMarsrutasByID($_POST['id']);

    include 'templates/marsrutai/marsrutai_marsrutai_report_view.tpl.php';
} else {
    
    
    include 'templates/marsrutai/marsrutai_marsrutai_report.tpl.php';
}


?>