<?php

include 'libraries/marsrutas.class.php';
$marsrutasObj = new marsrutas();

include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();


include 'libraries/orouostas.class.php';
$oroUostoObj = new orouostas();




if(isset($_POST['pilotas'])) {

    $naujasMarsrutas = $marsrutasObj->newMarsrutas($_POST['isvykimo_vieta'], $_POST['atvykimo_vieta'], $_POST['pilotas'], $_POST['busena'], $_POST['keleiviu_skaicius'], $_POST['fk_lektuvas_id_lektuvas'], $_POST['fk_oro_uostas_id_oro_uostas']);

    if($naujasMarsrutas) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas marsrutas');</script>";
    else echo "<script type='text/javascript'>alert('Marsruto įterpti nepavyko');</script>";
}
$visiOroUostai = $oroUostoObj->getOroUostaiList();
$visiLektuvai = $lektuvasObj->getLektuvasList();

include 'templates/marsrutai/marsrutai_new_route.tpl.php';

?>