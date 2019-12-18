<?php

class daiktas {
	public function getAllEntries($where = '') {
		$query = "	SELECT 
						daiktas.id_daiktas,
						daiktas.pavadinimas,
						daiktas.kiekis,
						daiktas.kaina,
						(daiktas.kiekis * daiktas.kaina) AS suma,
						oro_uostas.pavadinimas AS oro_uostas
					FROM daiktas
					LEFT JOIN oro_uostas ON daiktas.fk_oro_uostas=oro_uostas.id_oro_uostas "
					.$where;
		return mysql::select($query);
	}

	public function getByAirport($id) {
		return $this->getAllEntries("WHERE oro_uostas.id_oro_uostas={$id}");
	}

	public function insertNew($pavadinimas, $kiekis, $kaina, $oroUostoId) {
		$query = "	INSERT INTO `daiktas`(
						`pavadinimas`,
						kiekis,
						kaina,
						fk_oro_uostas)
					VALUES('{$pavadinimas}', {$kiekis}, {$kaina}, {$oroUostoId})";
		mysql::query($query);
	}

	public function delete($id) {
		$query = "DELETE FROM daiktas WHERE id_daiktas={$id}";
		mysql::query($query);
	}

}

?>