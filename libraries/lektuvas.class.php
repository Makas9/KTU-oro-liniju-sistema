<?php

class lektuvas {
    private $lektuvas_table = 'lektuvas';

    public function getLektuvasList() {
        $query = "  SELECT *
                    FROM {$this->lektuvas_table}";
        $data = mysql::select($query);

        return $data;
    }

}