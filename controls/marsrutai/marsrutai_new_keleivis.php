<?php



//---------------------------

include 'libraries/keleivis.class.php';
$dataObj = new keleivis();
$keleivisObj = $dataObj->getKeleivisList();

if(isset($_POST['vardas'])) {

    $naujasKeleivis = $dataObj->newKeleivis($_POST['vardas'], $_POST['pavarde'], $_POST['ivykis']);

    if($naujasKeleivis) echo "<script type='text/javascript'>alert('Sėkmingai įterptas naujas keleivis');</script>";
    else echo "<script type='text/javascript'>alert('Keleivio įterpti nepavyko');</script>";
}

include 'templates/marsrutai/marsrutai_new_keleivis.tpl.php';

?>