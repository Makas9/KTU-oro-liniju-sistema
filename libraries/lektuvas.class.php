<?php

class lektuvas {
    private $lektuvas_table = 'lektuvas';

    public function getLektuvasList() {
        $query = "  SELECT *
                    FROM {$this->lektuvas_table}";
        $data = mysql::select($query);

        return $data;
    }

    public function getLektuvasByID($lektuvas) {
        $query = "  SELECT *
                    FROM {$this->lektuvas_table} WHERE `id_lektuvas` = {$lektuvas}";
        $data = mysql::select($query)[0];

        return $data;
    }

}