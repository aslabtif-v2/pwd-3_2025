<?php
require_once "Database.php";

class Kue extends Database {

    public function tampilkanSemua() {
        $query = $this->conn->query("SELECT * FROM kue_lebaran ORDER BY id ASC");
        return $query;
    }
}