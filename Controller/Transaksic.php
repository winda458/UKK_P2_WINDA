<?php
session_start();
include '../Models/m_koneksi.php';

if (isset($_POST['jenis'])) {
    $id_tiket = $_POST['id_tiket'];
    $jenis    = $_POST['jenis'];
    $tgl_masuk = date('Y-m-d H:i:s');
    $status   = 'Masuk';
    $petugas  = $_SESSION['nama_user'];

    $query = "INSERT INTO tb_transaksi (id_tiket, jenis_kendaraan, jam_masuk, status, nama_petugas) 
              VALUES ('$id_tiket', '$jenis', '$tgl_masuk', '$status', '$petugas')";

    if (mysqli_query($koneksi, $query)) {

        header("location:../views/petugas/cetak.php?id=$id_tiket");
    } else {
        echo "Gagal mencetak karcis: " . mysqli_error($koneksi);
    }
}
?>
