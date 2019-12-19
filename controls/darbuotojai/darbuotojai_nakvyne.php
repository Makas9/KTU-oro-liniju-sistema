<?php

include 'libraries/darbuotojai.class.php';
$dataDarObj = new darbuotojai();
$darbuotojai = $dataDarObj->getDarbuotojaiList();

include 'libraries/nakvyne.class.php';
$dataNakObj = new nakvyne();
$nakvyne = $dataNakObj->getNakvyneList();


if(isset($_POST['nuo_darbuotojas'])) {
    $paskirstytasNakvyne = $dataDarObj->PridetiNakvyne($_POST['nuo_darbuotojas'], $_POST['nakvyne']);

    if($paskirstytasNakvyne) echo "<script type='text/javascript'>alert('Sėkmingai paskirstytas bagažas');</script>";
    else echo "<script type='text/javascript'>alert('Bagažo paskirstyti nepavyko');</script>";
}


include 'templates/darbuotojai/darbuotojai_nakvyne.tpl.php';

?>