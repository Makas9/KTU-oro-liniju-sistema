<?php

class kreditas {
    private $kreditas_table = 'kreditai';

    public function getKreditasList() {
        $query = "  SELECT *
                    FROM {$this->kreditas_table}";
        $data = mysql::select($query);

        return $data;
    }
	
	public function getKainaById($id) {
        $query = "  SELECT kreditu_kaina
                    FROM {$this->kreditas_table} WHERE `id` = {$id}";
        $data = mysql::select($query);

        return $data;
    }

    

}