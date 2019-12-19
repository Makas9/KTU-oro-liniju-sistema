<?php

class nakvyne {
    private $nakvyne_table = 'nakvyne';

    public function getNakvyneList() {
        $query = "  SELECT *
                    FROM {$this->nakvyne_table}";
        $data = mysql::select($query);

        return $data;
    }
}