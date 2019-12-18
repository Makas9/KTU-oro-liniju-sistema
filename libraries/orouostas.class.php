<?php

class orouostas {
    private $orouostu_table = 'oro_uostas';

    public function getOroUostaiList() {
        $query = "  SELECT *
                    FROM {$this->orouostu_table}";
        $data = mysql::select($query);

        return $data;
    }

    

}