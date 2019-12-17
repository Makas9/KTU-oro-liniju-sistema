<?php

class bilietas {
    private $bilietu_table = 'bilietas';

    
    
    
    public function newBilietas($kaina, $isvykimo_data, $fk_marsrutas_id_marsrutas) {    // ++
        $query = "	INSERT INTO {$this->bilietu_table} (kaina, isvykimo_data, fk_marsrutas_id_marsrutas )
					VALUES ('{$kaina}', '{$isvykimo_data}', '{$fk_marsrutas_id_marsrutas}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }
    
    
    
    

}