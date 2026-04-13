<?php
class TarifModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getTarifAll() {
        return mysqli_query($this->conn, "SELECT * FROM tb_tarif");
    }

    public function getHargaByJenis($jenis) {
        $query = "SELECT tarif_per_jam FROM tb_tarif WHERE jenis_kendaraan = '$jenis'";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_assoc($result);
    }
}
