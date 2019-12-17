<?php

 

//include 'templates/bagazas/bagazas_track_luggage.tpl.php';   

//---------------------------

include 'libraries/marsrutas.class.php';
$dataObj = new marsrutas();
$marsrutaiObj = $dataObj->getMarsrutaiList();

if(isset($_POST['marsrutaiObj']))
{
    $marsrutass = $dataObj->getMarsrutasByID($_POST['marsrutaiObj']);
    
    //include 'templates/marsrutai/marsrutai_track_marsruta.tpl.php';
}
include 'templates/marsrutai/marsrutai_track_marsruta.tpl.php';


?>