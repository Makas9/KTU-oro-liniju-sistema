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

    public function generateLuggagePrice($aukstis, $ilgis, $plotis, $svoris, $sumaPerKg, $sumaPerCm, $koeficientas) {
        $kaina = 0.99;

        $turis = $aukstis*$ilgis*$plotis;

        while($turis > 0){
            $kaina += ($sumaPerCm*1000);
            $turis -= 1000;
        }

        while($svoris > 0){
            $kaina += $sumaPerKg;
            $svoris -= 1;
        }

        return $kaina*$koeficientas;
    }

    public function getCekisByID($id) {
        $query = "  SELECT *
                    FROM {$this->cekis_table}
                    WHERE id_cekis='{$id}' LIMIT 1";
        $data = mysql::select($query);

        return $data;
    }
}