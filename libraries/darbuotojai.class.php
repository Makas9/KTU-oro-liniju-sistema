<?php

class darbuotojai {

	private $darbuotoju_table = 'darbuotojas';

	public function getDarbuotojaiList() {
        $query = "  SELECT *
                    FROM {$this->darbuotoju_table}";
        $data = mysql::select($query);

        return $data;
    }
	public function newDarbuotojas($vardas, $pavarde, $gim, $as_ko, $tel,
	$e_p, $mie, $ban, $sas, $kre, $pass) {
        $query = "	INSERT INTO {$this->darbuotoju_table} (vardas, pavarde,
		gimimo_data, asmens_kodas, telefonas, e_pastas, miestas, bankas, saskaita,
		kreditai, slaptazodis)
					VALUES ('{$vardas}', '{$pavarde}', '{$gim}', '{$as_ko}', '{$tel}',
					'{$e_p}', '{$mie}', '{$ban}', '{$sas}', '{$kre}', '{$pass}')";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }
	
	public function updateNuobauda($darbuotojas, $nuobauda) {
        $query = "UPDATE {$this->darbuotoju_table} 
		SET `fk_nuobauda_id_nuobauda1` = {$nuobauda} 
		WHERE `id_darbuotojas` = {$darbuotojas}";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }
	public function kredituNuskaiciavimas($darbuotojas, $kreditai) {	
        $query = "UPDATE {$this->darbuotoju_table} 
		SET `kreditai` = {$kreditai[0]['kreditai']}
		WHERE `id_darbuotojas` = {$darbuotojas}";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }
	
	public function PridetiNakvyne($darbuotojas, $nakvyne) {
        $query = "UPDATE {$this->darbuotoju_table} 
		SET `fk_nakvyne_id_nakvyne` = {$nakvyne} 
		WHERE `id_darbuotojas` = {$darbuotojas}";
        $data = mysql::query($query);

        if($data) return true;

        return false;
    }
	public function getDarbuotojasByID($id) {
        $query = "  SELECT *
                    FROM {$this->darbuotoju_table} WHERE `id_darbuotojas` = {$id}";
        $data = mysql::select($query);

        return $data;
	}
	
	public function getAll() {
		$query = "	SELECT
						*,
						CONCAT(vardas, ' ', pavarde) AS vardas_pavarde
					FROM darbuotojas";
		return mysql::select($query);
	}

    public function isCorrectLogin($email, $password) {
        $query = "  SELECT slaptazodis
                    FROM {$this->darbuotoju_table}
                    WHERE e_pastas='{$email}' LIMIT 1";
        $data = mysql::select($query)[0];
		
        if (sizeof($data) === 0) return false;
        if(password_verify($password, $data["slaptazodis"])) return true;
		
		return false;
    }

    public function getIDByEmail($email) {
        $query = "  SELECT id_darbuotojas
                    FROM {$this->darbuotoju_table}
                    WHERE e_pastas='{$email}' LIMIT 1";
        $data = mysql::select($query)[0]["id_darbuotojas"];

        return $data;
	}
	
	public function getDarbuotojasByEmail($email) {
        $query = "  SELECT *
                    FROM {$this->darbuotoju_table}
                    WHERE e_pastas='{$email}' LIMIT 1";
        $data = mysql::select($query)[0];

        return $data;
	}

	public function canRegister($email, $password) {
        $query = "  SELECT *
                    FROM {$this->darbuotoju_table}
                    WHERE e_pastas='{$email}'";
        $data = mysql::select($query);

        if (sizeof($data) === 0)
            return true;
        return false;
    }
	
	public function register($email, $password) {
		$passwordHashed = password_hash($password, PASSWORD_DEFAULT);
		
        $query = "	INSERT INTO {$this->darbuotoju_table} (e_pastas, slaptazodis)
					VALUES ('{$email}', '{$passwordHashed}')";
		
        $data = mysql::query($query);
		
        if ($data)
            return true;
        return false;
    }

}