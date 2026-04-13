<?php
session_start();
require_once __DIR__ . "/../Models/m_koneksi.php";

$database = new m_koneksi();
$koneksi = $database->koneksi;

// Cek action apa yang dikirim (tambah / edit / hapus)
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'tambah') {
    $nama = $_POST['nama_area'];
    $kapasitas = $_POST['kapasitas'];

    // Simpan area baru, 'terisi' mulai dari 0
    $query = "INSERT INTO area_parkir (nama_area, kapasitas, terisi) VALUES ('$nama', '$kapasitas', 0)";
    $exec = mysqli_query($koneksi, $query);

    if ($exec) {
        header("Location: ../views/admin/area.php?pesan=berhasil");
    } else {
        echo "Gagal tambah data: " . mysqli_error($koneksi);
    }
} 

elseif ($action == 'edit') {
    $id = $_POST['id_area'];
    $nama = $_POST['nama_area'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $query = "UPDATE area_parkir SET nama_area='$nama', kapasitas='$kapasitas', terisi='$terisi' WHERE id_area='$id'";
    $exec = mysqli_query($koneksi, $query);

    if ($exec) {
        header("Location: ../views/admin/area.php?pesan=update_berhasil");
    }
} 

elseif ($action == 'hapus') {
    $id = $_GET['id'];
    $query = "DELETE FROM area_parkir WHERE id_area='$id'";
    $exec = mysqli_query($koneksi, $query);

    if ($exec) {
        header("Location: ../views/admin/area.php?pesan=hapus_berhasil");
    }
}
?>
