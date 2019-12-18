<?php

class patalpos {
    private $patalpu_table = 'patalpa';

    public function getPatalpa($id) {
        return $this->getPatalpuList("WHERE patalpa.id_patalpa=".$id)[0];
    }

    public function getPatalpuList($where = '') {
		$query = "	SELECT
						patalpa.id_patalpa,
						patalpa.pavadinimas,
						patalpa.plotas,
						patalpa.kaina,
						patalpa.fk_nuomotojas,
						patalpa.fk_oro_uostas,
						CONCAT(darbuotojas.vardas, ' ', darbuotojas.pavarde) AS nuomotojas,
						oro_uostas.pavadinimas AS oro_uostas
					FROM patalpa
					LEFT JOIN darbuotojas ON patalpa.fk_nuomotojas=darbuotojas.id_darbuotojas
					LEFT JOIN oro_uostas ON patalpa.fk_oro_uostas=oro_uostas.id_oro_uostas "
					.$where;
        $data = mysql::select($query);

        return $data;
    }

	public function insertNew($pavadinimas, $plotas, $kaina, $oroUostoId) {
		$query = "	INSERT INTO `patalpa`(
						`pavadinimas`,
						`plotas`,
						`kaina`,
						`fk_oro_uostas`)
					VALUES('{$pavadinimas}', {$plotas}, {$kaina}, {$oroUostoId})";
		mysql::query($query);

	}

	public function update($id, $pavadinimas, $plotas, $kaina, $nuomotojoId = -1) {
		$query = "	UPDATE patalpa SET 
						`pavadinimas` = '{$pavadinimas}',
						`plotas` = {$plotas},
						`kaina` = {$kaina}";

		if ($nuomotojoId != -1)
			$query .= ",`fk_nuomotojas` = {$nuomotojoId}";
		else
		$query .= ",`fk_nuomotojas` = NULL";

		$query .= " WHERE id_patalpa={$id}";
		mysql::query($query);

	}
	
	public function delete($id) {
		$query = "DELETE FROM patalpa WHERE id_patalpa={$id}";
		mysql::query($query);
	}

}