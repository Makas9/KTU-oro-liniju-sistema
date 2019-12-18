<?php

class marsrutas {
    private $marsrutu_table = 'marsrutas';

    public function getMarsrutaiList() {                  // ++
        $query = "  SELECT *
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
    

}