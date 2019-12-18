<?php

class tvarkarasciai {

	public function getPastFlights($place = -1) {
		return $this->getFlights('>', $place);
	}

	public function getUpcomingFlights($place = -1) {
		return $this->getFlights('<', $place);
	}

	public function getFlights($timeComparer, $place = -1) {
		$query = "	SELECT
						tvarkarascio_irasas.id_tvarkarascio_irasas,
						tvarkarascio_irasas.laikas,
						marsrutas.id_marsrutas,
						marsrutas.isvykimo_vieta,
						marsrutas.atvykimo_vieta
					FROM tvarkarascio_irasas
					LEFT JOIN marsrutas ON tvarkarascio_irasas.fk_marsrutas=marsrutas.id_marsrutas
					WHERE NOW() {$timeComparer} tvarkarascio_irasas.laikas ";
		if ($place !== -1)
			$query .= " AND (marsrutas.atvykimo_vieta='{$place}' OR marsrutas.isvykimo_vieta='{$place}') ";

		if ($timeComparer === '<')
			$query .= " ORDER BY tvarkarascio_irasas.laikas ASC";
		else
			$query .= " ORDER BY tvarkarascio_irasas.laikas DESC";
		return mysql::select($query);			
	}

	public function insertNew($laikas, $fk_marsrutas) {
		$query = "	INSERT INTO tvarkarascio_irasas(
						`laikas`,
						`fk_marsrutas`)
					VALUES('{$laikas}', {$fk_marsrutas})";
		mysql::query($query);
	}

}

?>