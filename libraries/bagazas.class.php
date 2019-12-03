<?php

class bagazas {
    private $bagazu_table = 'bagazas';

    public function getLuggageList() {
        $query = "  SELECT *
                    FROM {$this->bagazu_table}";
        $data = mysql::select($query);

        return $data;
    }

    public function newBaggage($aukstis, $ilgis, $plotis, $svoris, $ypatybes, $lektuvas, $keleivis, $cekis) {
        $query = "	INSERT INTO {$this->bagazu_table} (ilgis, plotis, svoris, aukstis, ypatybes, busena, fk_lektuvas_id_lektuvas, fk_keleivis_id_keleivis, fk_cekis_id_cekis)
					VALUES ('{$ilgis}', '{$plotis}', '{$svoris}', '{$aukstis}', '{$ypatybes}', '0', '{$lektuvas}', '{$keleivis}', '{$cekis}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

}