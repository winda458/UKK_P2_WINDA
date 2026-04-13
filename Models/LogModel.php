<?php
class LogModel {
    private $conn;
    private $table_name = "log_aktivitas";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function saveLog($username, $aktivitas) {
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date('Y-m-d H:i:s');

        // Pastikan '$username' dan '$aktivitas' dibungkus kutip satu
        $query = "INSERT INTO " . $this->table_name . " (id, aktifitas, waktu_aktivitas) 
                  VALUES ('$username', '$aktivitas', '$waktu')";
        
        return mysqli_query($this->conn, $query);
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY waktu_aktivitas DESC LIMIT 10";
        return mysqli_query($this->conn, $query);
    }
}
?>
