<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
date_default_timezone_set('Asia/Jakarta');
require_once "../Models/m_transaksi.php";

$model = new m_transaksi();

if (isset($_POST['plat'])) {
    $plat = $_POST['plat'];
    $data = $model->getKendaraanMasuk($plat);

    if (!$data) {
        echo "<script>alert('Data tidak ditemukan!'); window.location='../views/petugas/keluar.php';</script>";
        exit;
    }

    $waktu_masuk = strtotime($data['waktu_masuk']);
    $waktu_keluar = time();
    $selisih = ceil(($waktu_keluar - $waktu_masuk) / 3600);
    if ($selisih <= 0) $selisih = 1;

    $tarif_perjam = ($data['jenis_kendaraan'] == 'motor') ? 2000 : 5000;
    $total = $selisih * $tarif_perjam;

    // Simpan ke database (ID, Durasi, Total)
    $model->updateKeluar($data['id_parkir'], $selisih, $total);
    $model->kurangiKapasitas($data['id_area']);

    $url = "../views/petugas/keluar_struk.php?id=".$data['id_parkir']."&plat=".$data['no_plat']."&jenis=".$data['jenis_kendaraan']."&masuk=".$data['waktu_masuk']."&keluar=".date('Y-m-d H:i:s')."&durasi=".$selisih."&total=".$total;
    header("Location: " . $url);
    exit;
}
?>
