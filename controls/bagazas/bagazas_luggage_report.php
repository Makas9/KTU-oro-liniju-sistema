<?php

include 'libraries/bagazas.class.php';
$bagazasObj = new bagazas();

include 'libraries/keleivis.class.php';
$keleivisObj = new keleivis();

include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();

include 'libraries/cekis.class.php';
$cekisObj = new cekis();

include 'libraries/skundas.class.php';
$skundasObj = new skundas();

include 'libraries/darbuotojai.class.php';
$darbuotojasObj = new darbuotojai();

include 'libraries/marsrutas.class.php';
$marsrutasObj = new marsrutas();

if(!empty(isset($_POST['id']))) {
    $bagazas = $bagazasObj->getLuggageByID($_POST['id']);
    $keleivis = $keleivisObj->getKeleivisByID($bagazas[0]['fk_keleivis_id_keleivis']);
    $cekis = $cekisObj->getCekisByID($bagazas[0]['fk_cekis_id_cekis']);
    $lektuvas = $lektuvasObj->getLektuvasByID($bagazas[0]['fk_lektuvas_id_lektuvas']);
    $bagazoKelias = $marsrutasObj->getMarsrutaiByAirplaneID($bagazas[0]['fk_lektuvas_id_lektuvas']);

    include 'templates/bagazas/bagazas_luggage_report_view.tpl.php';
} else {
    $bagazas = $bagazasObj->getLuggageList();
    foreach($bagazas as $key => $row) {
        $bagazas[$key]["skundas"] = "nėra";
        $bagazas[$key]["keleivis_pilnasVardas"] = $keleivisObj->getFullName($row['fk_keleivis_id_keleivis']);
        if($skundasObj->haveComplaint($row['fk_keleivis_id_keleivis'])) $bagazas[$key]["skundas"] = "yra";
    }
    include 'templates/bagazas/bagazas_luggage_report.tpl.php';
}

?>