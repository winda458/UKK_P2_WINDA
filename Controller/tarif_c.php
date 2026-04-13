<?php
session_start();
date_default_timezone_set('Asia/Jakarta'); 
require_once __DIR__ . "/../Models/m_koneksi.php";

$database = new m_koneksi();
$koneksi = $database->koneksi;

if (isset($_POST['jenis'])) {

    $jenis = $_POST['jenis'];
    $plat = mysqli_real_escape_string($koneksi, $_POST['plat']); 
    $waktu_masuk = date('Y-m-d H:i:s');
    $status = 'masuk';

    // ambil id user dari session
    $id_user = isset($_SESSION['id']) ? $_SESSION['id'] : 0;

    // tentukan area
    $id_area = ($jenis == 'motor') ? 1 : 2;

    // cek kapasitas
    $cek = mysqli_query($koneksi, "SELECT * FROM area_parkir WHERE id_area='$id_area'");
    $data_area = mysqli_fetch_assoc($cek);

    if ($data_area['terisi'] >= $data_area['kapasitas']) {
        echo "<script>alert('Parkir penuh!'); window.location.href='../views/petugas/input_transaksi.php';</script>";
        exit;
    }

    // query insert
    $query = "INSERT INTO tb_transaksi 
    (no_plat, jenis_kendaraan, waktu_masuk, status, id, id_area) 
    VALUES 
    ('$plat', '$jenis', '$waktu_masuk', '$status', '$id_user', '$id_area')";

    $exec = mysqli_query($koneksi, $query) or die("ERROR NYA: " . mysqli_error($koneksi));

    if ($exec) {

        // update kapasitas
        mysqli_query($koneksi, "
            UPDATE area_parkir 
            SET terisi = terisi + 1 
            WHERE id_area = '$id_area'
        ");

        $ambil = mysqli_query($koneksi, "
            SELECT id_parkir FROM tb_transaksi 
            ORDER BY id_parkir DESC LIMIT 1
        ");

        $data_id = mysqli_fetch_assoc($ambil);
        $id_baru = $data_id['id_parkir'];

        header("Location: cetak_c.php?id=" . $id_baru);
        exit;

    } else {
        die("Gagal simpan: " . mysqli_error($koneksi));
    }

}
?>