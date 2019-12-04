<?php

class keleivis {
    private $keleiviu_table = 'keleivis';

    public function getKeleivisList() {
        $query = "  SELECT *
                    FROM {$this->keleiviu_table}";
        $data = mysql::select($query);

        return $data;
    }

    public function getFullName($id) {
        $query = "  SELECT vardas, pavarde
                    FROM {$this->keleiviu_table}
                    WHERE id_keleivis='{$id}' LIMIT 1";
        $data = mysql::select($query)[0];

        return $data["vardas"]." ".$data["pavarde"];
    }

    public function getKeleivisByID($id) {
        $query = "  SELECT *
                    FROM {$this->keleiviu_table}
                    WHERE id_keleivis='{$id}' LIMIT 1";
        $data = mysql::select($query);

        return $data;
    }

}