<?php

class skundas
{
    private $skundas_table = 'skundas';

    public function newSkundas($keleivis, $darbuotojas)
    {
        $query = "	INSERT INTO {$this->skundas_table} (busena, fk_darbuotojas_id_darbuotojas, fk_keleivis_id_keleivis)
					VALUES ('1', '{$darbuotojas}', '{$keleivis}')";
        $data = mysql::query($query);

        if ($data) return true;

        return false;
    }

    public function haveComplaint($keleivis)
    {
        $query = "  SELECT *
                    FROM {$this->skundas_table} WHERE `busena`='1' AND `fk_keleivis_id_keleivis`='{$keleivis}' LIMIT 1";
        $data = mysql::select($query)[0];

        if (sizeof($data) === 0) return false;

        return true;
    }

}