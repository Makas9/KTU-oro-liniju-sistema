<?php

class keleivis {
    private $keleiviu_table = 'keleivis';

    public function getKeleivisList() {
        $query = "  SELECT *
                    FROM {$this->keleiviu_table}";
        $data = mysql::select($query);

        return $data;
    }

}