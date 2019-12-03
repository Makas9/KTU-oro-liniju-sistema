<?php

class ypatybe {
    private $ypatybe_table = 'ypatybes';

    public function getYpatybeList() {
        $query = "  SELECT *
                    FROM {$this->ypatybe_table}";
        $data = mysql::select($query);

        return $data;
    }

}