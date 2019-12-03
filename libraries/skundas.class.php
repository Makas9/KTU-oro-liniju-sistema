<?php

class skundas {
    private $skundas_table = 'skundas';

    public function newSkundas($keleivis, $darbuotojas) {
        $query = "	INSERT INTO {$this->skundas_table} (busena, fk_darbuotojas_id_darbuotojas, fk_keleivis_id_keleivis)
					VALUES ('1', '{$darbuotojas}', '{$keleivis}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

}