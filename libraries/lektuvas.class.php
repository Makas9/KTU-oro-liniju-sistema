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
	public function newLektuvas($max_kuras, $kuras, $bagazo_talpa, $max_keleiviai, $modelis, $marke, $fk_remontas_id_remontas) {
        $query = "	INSERT INTO {$this->lektuvas_table} (max_kuras, kuras, bagazo_talpa, max_keleiviai, modelis, marke, fk_remontas_id_remontas)
					VALUES ('{$max_kuras}', '{$kuras}', '{$bagazo_talpa}', '{$max_keleiviai}', '{$modelis}', '{$marke}', '{$fk_remontas_id_remontas}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }
	public function trackAircraft($id) {
        $query = "  SELECT *
                    FROM {$this->lektuvas_table} WHERE `id_lektuvas` = {$id}";
        $data = mysql::select($query);

        return $data;
    }
	
	public function insertAircraftIntoRoute($lektuvas, $marsrutas) {
        $query = "UPDATE {$this->marsrutas_table} SET `fk_lektuvas_id_lektuvas` = {$lektuvas} WHERE `id_marsrutas` = {$bagazas}";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

}