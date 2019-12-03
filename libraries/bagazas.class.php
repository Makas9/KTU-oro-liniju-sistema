<?php

class bagazas {
    private $bagazu_table = 'bagazas';

    public function getLuggageList() {
        $query = "  SELECT *
                    FROM {$this->bagazu_table}";
        $data = mysql::select($query);

        return $data;
    }

    public function getEmptyLuggageList() {
        $query = "  SELECT *
                    FROM {$this->bagazu_table} WHERE `fk_lektuvas_id_lektuvas` IS NULL";
        $data = mysql::select($query);

        return $data;
    }

    public function newBaggage($aukstis, $ilgis, $plotis, $svoris, $ypatybes, $keleivis, $cekis) {
        $query = "	INSERT INTO {$this->bagazu_table} (ilgis, plotis, svoris, aukstis, ypatybes, busena, fk_keleivis_id_keleivis, fk_cekis_id_cekis)
					VALUES ('{$ilgis}', '{$plotis}', '{$svoris}', '{$aukstis}', '{$ypatybes}', '0', '{$keleivis}', '{$cekis}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

    public function trackBaggage($keleivis) {
        $query = "  SELECT *
                    FROM {$this->bagazu_table} WHERE `fk_keleivis_id_keleivis` = {$keleivis}";
        $data = mysql::select($query);

        return $data;
    }

    public function insertLuggageIntoPlane($lektuvas, $bagazas) {
        $query = "UPDATE {$this->bagazu_table} SET `fk_lektuvas_id_lektuvas` = {$lektuvas} WHERE `id_bagazas` = {$bagazas}";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

}