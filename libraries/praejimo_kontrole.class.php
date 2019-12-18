<?php

class praejimo_kontrole {

	public function getAllEntries($where = '') {
		$query = "	SELECT 
						praejimo_kontrole.id,
						praejimo_kontrole.keleivis,
						praejimo_kontrole.oro_uostas AS oro_uosto_id,
						praejimo_kontrole.vartai,
						praejimo_kontrole.laikas,
						oro_uostas.pavadinimas AS oro_uostas
					FROM praejimo_kontrole
					LEFT JOIN oro_uostas ON praejimo_kontrole.oro_uostas=oro_uostas.id_oro_uostas "
					.$where
					." ORDER BY praejimo_kontrole.id DESC";
		return mysql::select($query);
	}

	public function getByAirport($id) {
		return $this->getAllEntries("WHERE praejimo_kontrole.oro_uostas={$id}");
	}

	public function insertNew($keleivis, $oroUostoId, $vartai) {
		$query = "	INSERT INTO `praejimo_kontrole`(
						`keleivis`,
						`oro_uostas`,
						`vartai`,
						`laikas`)
					VALUES('{$keleivis}', {$oroUostoId}, '{$vartai}', NOW())";
		mysql::query($query);
	}
}