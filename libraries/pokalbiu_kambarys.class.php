<?php

class pokalbiu_kambarys {

    public function getAllMessages() {
        $query = "  SELECT
						pokalbiu_kambarys.*,
						darbuotojas.vardas
					FROM pokalbiu_kambarys
					LEFT JOIN darbuotojas ON pokalbiu_kambarys.darbuotojas=darbuotojas.id_darbuotojas
					ORDER BY pokalbiu_kambarys.id_pokalbiu_kambarys DESC";
		$data = mysql::select($query);
		
        return $data;
	}
	
	public function insertNewMessage($darbuotojoId, $tekstas) {
		$query = "	INSERT INTO `pokalbiu_kambarys`(
						`darbuotojas`,
						`laikas`,
						`tekstas`)
					VALUES({$darbuotojoId}, NOW(), '{$tekstas}')";
		mysql::query($query);

	}

    

}