<?php

class ypatybe {
    private $ypatybe_table = 'ypatybes';

    public function getYpatybeList() {
        $query = "  SELECT *
                    FROM {$this->ypatybe_table}";
        $data = mysql::select($query);

        return $data;
    }

    public function getYpatybeMultiplierByID($ypatybe) {
        $query = "  SELECT `koeficientas`
                    FROM {$this->ypatybe_table} WHERE `id` = {$ypatybe}";
        $data = mysql::select($query)[0];

        return $data;
    }

}