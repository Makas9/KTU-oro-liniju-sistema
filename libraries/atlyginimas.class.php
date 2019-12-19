<?php

class atlyginimas {
    private $atlyginimas_table = 'atlyginimas';

    public function getAtlyginimasList() {
        $query = "  SELECT *
                    FROM {$this->atlyginimas_table}";
        $data = mysql::select($query);

        return $data;
    }

    

}