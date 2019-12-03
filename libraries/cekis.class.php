<?php

class cekis {
    private $cekis_table = 'cekis';

    public function createNewCekis($keleivis, $kaina) {
        $query = "	INSERT INTO {$this->cekis_table} (kaina, fk_keleivis_id_keleivis)
					VALUES ('{$kaina}', '{$keleivis}')";
        $data = mysql::query($query);

        if($data) return mysql::getLastInsertedId();

        return false;
    }

    public function generateLuggagePrice($aukstis, $ilgis, $plotis, $svoris, $ypatybe) {
        $kaina = 5;

        $turis = $aukstis*$ilgis*$plotis;

        while($turis > 0){
            $kaina += 5;
            $turis -= 1000;
        }

        while($svoris > 0){
            $kaina += 0.99;
            $svoris -= 1;
        }

        switch($ypatybe){
            case "iprastas":
                $multiply = 1;
                break;
            case "trapus":
                $multiply = 1.4;
                break;
            default:
                $multiply = 1;
        }

        return $kaina*$multiply;
    }

}