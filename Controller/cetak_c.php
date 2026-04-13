<?php
session_start();
require_once "../Models/m_transaksi.php";

if (!isset($_GET['id'])) {
    die("ID tidak ada!");
}

$id_parkir = $_GET['id'];

$model = new m_transaksi();
$data = $model->getDetail($id_parkir);

if (!$data) {
    die("Data tidak ketemu seng!");
}

// kirim ke view
include "../views/petugas/cetak.php";