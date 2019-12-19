<?php

class nuobauda {
    private $nuobauda_table = 'nuobauda';

    public function getNuobaudaList() {
        $query = "  SELECT *
                    FROM {$this->nuobauda_table}";
        $data = mysql::select($query);

        return $data;
    }
	public function newNuobauda($date, $priezastis) {
        $query = "	INSERT INTO {$this->nuobauda_table} (data, priezastis)
					VALUES ('{$date}', '{$priezastis}')";
        $data = mysql::query($query);

        if($data) return true;
        return false;
    }


}