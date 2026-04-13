<?php
require_once "m_koneksi.php";

class m_transaksi {
    private $koneksi;

    public function __construct() {
        $db = new m_koneksi();
        $this->koneksi = $db->koneksi;
    }

    public function getDetail($id) {
        $id_aman = mysqli_real_escape_string($this->koneksi, $id);
        $query = mysqli_query($this->koneksi, "
            SELECT tb_transaksi.*, area_parkir.nama_area 
            FROM tb_transaksi 
            LEFT JOIN area_parkir ON tb_transaksi.id_area = area_parkir.id_area 
            WHERE tb_transaksi.id_parkir = '$id_aman'
        ");
        return mysqli_fetch_assoc($query);
    }

    public function getKendaraanMasuk($plat) {
        $plat_aman = mysqli_real_escape_string($this->koneksi, $plat);
        $query = mysqli_query($this->koneksi, "
            SELECT * FROM tb_transaksi 
            WHERE no_plat='$plat_aman' AND status='masuk'
            ORDER BY id_parkir DESC LIMIT 1
        ");
        return mysqli_fetch_assoc($query);
    }

    public function updateKeluar($id_parkir, $durasi, $total) {
        return mysqli_query($this->koneksi, "
            UPDATE tb_transaksi 
            SET waktu_keluar = NOW(), 
                durasi_jam = '$durasi', 
                biaya_total = '$total', 
                status = 'keluar'
            WHERE id_parkir = '$id_parkir'
        ");
    }

    public function kurangiKapasitas($id_area) {
        return mysqli_query($this->koneksi, "UPDATE area_parkir SET terisi = terisi - 1 WHERE id_area = '$id_area'");
    }

    public function getRekapTransaksi() {
        return mysqli_query($this->koneksi, "SELECT * FROM tb_transaksi WHERE status = 'keluar' ORDER BY waktu_keluar DESC");
    }

    public function getTotalPendapatan() {
        $query = mysqli_query($this->koneksi, "SELECT SUM(biaya_total) as total FROM tb_transaksi WHERE status = 'keluar'");
        if ($query) {
            $data = mysqli_fetch_assoc($query);
            return $data['total'] ?? 0;
        }
        return 0;
    }
}
?>