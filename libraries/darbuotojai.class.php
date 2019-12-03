<?php

class darbuotojai {
    private $darbuotoju_table = 'darbuotojas';

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