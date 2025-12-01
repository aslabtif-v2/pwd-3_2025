<?php
class Database {
    private $host = "localhost";
    private $port = "5432";
    private $user = "postgres"; // ganti jika username beda
    private $pass = "12345678";         // isi password PostgreSQL kamu
    private $db   = "Lebaran";
    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO(
                "pgsql:host=$this->host;port=$this->port;dbname=$this->db",
                $this->user,
                $this->pass
            );
            // Error mode
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }
}
