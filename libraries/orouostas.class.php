<?php

class orouostas {

    public function getOroUostaiList() {
        $query = "  SELECT *
                    FROM oro_uostas";
        $data = mysql::select($query);

        return $data;
	}

	public function getOneAirport($id) {
		$query = "  SELECT *
					FROM oro_uostas
					WHERE id_oro_uostas={$id}
					LIMIT 1";
		$data = mysql::select($query)[0];

		return $data;
	}

	public function updateAirport($id, $salis, $miestas, $pavadinimas, $koordinates) {
		$query = "	UPDATE `oro_uostas`
		SET
			`salis` = '{$salis}',
			`miestas` = '{$miestas}',
			`pavadinimas` = '{$pavadinimas}',
			`koordinates` = '{$koordinates}'
			WHERE id_oro_uostas={$id}";
		mysql::query($query);
	}

	public function deleteAirport($id) {
		$query = "DELETE FROM oro_uostas WHERE id_oro_uostas={$id}";
		mysql::query($query);
	}
	
	public function insertNewAirport($salis, $miestas, $pavadinimas, $koordinates) {
		$query = "	INSERT INTO `oro_uostas`(
						`salis`,
						`miestas`,
						`pavadinimas`,
						`koordinates`)
					VALUES('{$salis}', '{$miestas}', '{$pavadinimas}', '{$koordinates}')";
		mysql::query($query);
	}

    

}