<?php

class marsrutas {
    private $marsrutu_table = 'marsrutas';

    public function getMarsrutaiList() {
        $query = "  SELECT
						*,
						CONCAT(isvykimo_vieta, ' - ', atvykimo_vieta) AS pavadinimas
                    FROM {$this->marsrutu_table}";
        $data = mysql::select($query);

        return $data;
    }

    
    
    public function newMarsrutas($isvykimo_vieta, $atvykimo_vieta, $pilotas, $busena, $keleiviu_skaicius, $fk_lektuvas_id_lektuvas, $fk_oro_uostas_id_oro_uostas) {    // ++
        $query = "	INSERT INTO {$this->marsrutu_table} (isvykimo_vieta, atvykimo_vieta, pilotas, busena, keleiviu_skaicius, fk_lektuvas_id_lektuvas, fk_oro_uostas_id_oro_uostas)
					VALUES ('{$isvykimo_vieta}', '{$atvykimo_vieta}', '{$pilotas}', '{$busena}', '{$keleiviu_skaicius}', '{$fk_lektuvas_id_lektuvas}', '{$fk_oro_uostas_id_oro_uostas}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }
    
    
    
    public function getMarsrutasByID($id) {              // ++
        $query = "  SELECT *
                    FROM {$this->marsrutu_table} WHERE `id_marsrutas` = {$id}";
        $data = mysql::select($query);

        return $data;
    }
    
    public function getMarsrutasByStartPoint($isvykimo_vieta) {              // ++
        $query = "  SELECT *
                    FROM {$this->marsrutu_table} WHERE `isvykimo_vieta` = '$isvykimo_vieta'";
        $data = mysql::select($query);

        return $data;
    }
    
    public function getMarsrutasByEndPoint($atvykimo_vieta) {              // ++
        $query = "  SELECT *
                    FROM {$this->marsrutu_table} WHERE `atvykimo_vieta` = '$atvykimo_vieta'";
        $data = mysql::select($query);

        return $data;
    }

    public function getMarsrutaiByAirplaneID($id) {              // ++
        $query = "  SELECT *
                    FROM {$this->marsrutu_table} WHERE `fk_lektuvas_id_lektuvas` = {$id}";
        $data = mysql::select($query);

        return $data;
    }
	  public function getEmptyMarsrutaiList() {
        $query = "  SELECT *
                    FROM {$this->marsrutu_table} WHERE `fk_lektuvas_id_lektuvas` IS NULL";
        $data = mysql::select($query);

        return $data;
    }
	  public function insertPlaneIntoMarsrutas($marsrutas, $lektuvas) {
        $query = "UPDATE {$this->marsrutu_table} SET `fk_lektuvas_id_lektuvas` = {$lektuvas} WHERE `id_marsrutas` = {$marsrutas}";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }

	public function getPlacesList() {
		$query = "	SELECT marsrutas.isvykimo_vieta AS vieta FROM marsrutas
					UNION
					SELECT marsrutas.atvykimo_vieta FROM marsrutas";
		return mysql::select($query);
	}
    

}