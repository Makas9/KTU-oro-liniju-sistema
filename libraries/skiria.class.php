<?php

class skiria {
    private $skiria_table = 'skiria';

    public function getSkiriaList() {
        $query = "  SELECT *
                    FROM {$this->skiria_table}";
        $data = mysql::select($query);

        return $data;
    }
	public function insertAtlyginimasIntoDarbuotojas($atlyginimas, $darbuotojas) {
        $query = "INSERT INTO {$this->skiria_table} (`fk_atlyginimas_id_atlyginimas`,fk_darbuotojas_id_darbuotojas)
		VALUES ('{$atlyginimas}', '{$darbuotojas}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

    

}