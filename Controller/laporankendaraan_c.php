<?php
require_once __DIR__ . "/../Models/m_koneksi.php";

class LaporanKendaraan_c {
    private $koneksi;

    public function __construct() {
        $database = new m_koneksi();
        $this->koneksi = $database->koneksi;
    }

    public function getKendaraanAktif() {
    // Memanggil 'nama_area' sesuai yang ada di foto phpMyAdmin kamu tadi
    $sql = "SELECT t.*, a.nama_area 
            FROM tb_transaksi t
            LEFT JOIN area_parkir a ON t.id_area = a.id_area 
            WHERE t.status = 'masuk' OR t.waktu_keluar IS NULL 
            ORDER BY t.waktu_masuk DESC";
    
    $result = mysqli_query($this->koneksi, $sql);
    
    if (!$result) {
        die("Waduh Error SQL: " . mysqli_error($this->koneksi));
    }
    
    return $result;
}

}
?>
