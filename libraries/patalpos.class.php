<?php

class patalpos {
    private $patalpu_table = 'patalpa';

    public function getPatalpa($id) {
        $query = "  SELECT *
                    FROM {$this->patalpu_table}
                    WHERE id_patalpa={$id}";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getPatalpuList() {
        $query = "  SELECT *
                    FROM {$this->patalpu_table}";
        $data = mysql::select($query);

        return $data;
    }

    public function insertPatalpa($data) {
		$query = "  INSERT INTO {$this->patalpu_table}
                    (`plotas`, `kaina`)
                    VALUES ('{$data['plotas']}', '{$data['kaina']}')";
		mysql::query($query);
    }
    
    public function updatePatalpa($data) {
        $query = "  UPDATE {$this->patalpu_table}
					SET
                        `plotas`={$data['plotas']},
					    `kaina`={$data['kaina']}
                    WHERE `id_patalpa`='{$data['id_patalpa']}'";
		mysql::query($query);
    }

}