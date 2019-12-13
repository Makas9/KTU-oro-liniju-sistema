<?php

class remontas {
    private $remontu_table = 'remontas';

    public function getRemontasList() {
        $query = "  SELECT *
                    FROM {$this->remontu_table}";
        $data = mysql::select($query);

        return $data;
    }
  public function newRemontas($registravimo_data, $gedimo_aprasas, $remonto_aprasas, $remonto_data) {
        $query = "	INSERT INTO {$this->remontu_table} (registravimo_data, gedimo_aprasas, remonto_aprasas, remonto_data)
					VALUES ('{$registravimo_data}', '{$gedimo_aprasas}', '{$remonto_aprasas}', '{$remonto_data}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

    public function getRemontasByID($id) {
        $query = "  SELECT *
                    FROM {$this->remontu_table}
                    WHERE id_remontas='{$id}' LIMIT 1";
        $data = mysql::select($query);

        return $data;
    }

}