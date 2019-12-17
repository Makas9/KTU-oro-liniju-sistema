<?php

include 'libraries/lektuvas.class.php';
$lektuvasObj = new lektuvas();




    $visiLektuvas = $lektuvasObj->getLektuvasList();

    include 'templates/lektuvai/lektuvai_aircraft_list.tpl.php';

?>