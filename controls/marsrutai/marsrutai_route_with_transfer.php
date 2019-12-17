<?php


//---------------------------

include 'libraries/marsrutas.class.php';
$dataObj = new marsrutas();
$marsrutaiObj = $dataObj->getMarsrutaiList();

if(isset($_POST['isvykimo_vieta']))
{
    
    $isvykimas = $dataObj->getMarsrutasByStartPoint($_POST['isvykimo_vieta']);
    $atvykimas = $dataObj->getMarsrutasByEndPoint($_POST['atvykimo_vieta']);
    
    

}
include 'templates/marsrutai/marsrutai_route_with_transfer.tpl.php';


?>