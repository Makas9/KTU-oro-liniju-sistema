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
        $data = mysql::select($query)[0]["koeficientas"];

        return $data;
    }

    public function getYpatybeMultiplierByName($ypatybe) {
        $query = "  SELECT `koeficientas`
                    FROM {$this->ypatybe_table} WHERE `ypatybe` = '{$ypatybe}'";
        $data = mysql::select($query)[0]["koeficientas"];

        return $data;
    }

    public function updateYpatybeByName($ypatybe, $koeficientas) {
        $query = "  UPDATE {$this->ypatybe_table}
					SET
                        `koeficientas`={$koeficientas}
                    WHERE `ypatybe`='{$ypatybe}'";

        $data = mysql::query($query);

        if ($data)
            return true;
        return false;
    }

}