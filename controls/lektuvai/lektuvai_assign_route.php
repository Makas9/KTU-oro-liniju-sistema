<?php

include 'libraries/marsrutas.class.php';
$marsrutasObj = new marsrutas();


include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();

if(isset($_POST['marsrutas'])) {
    $paskirstytasMarsrutas = $marsrutasObj->insertPlaneIntoMarsrutas($_POST['marsrutas'], $_POST['lektuvas']);

    if($paskirstytasMarsrutas) echo "<script type='text/javascript'>alert('Sėkmingai paskirstytas lektuvas');</script>";
    else echo "<script type='text/javascript'>alert('Lektuvo paskirstyti nepavyko');</script>";
}

$visiLektuvai = $lektuvasObj->getLektuvasList();

$laisviMarsrutai = $marsrutasObj->getEmptyMarsrutaiList();

include 'templates/lektuvai/lektuvai_assign_route.tpl.php';

?>