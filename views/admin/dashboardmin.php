<?php
session_start();
require_once '../../Models/m_koneksi.php';
require_once '../../Models/LogModel.php';

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:../../index.php");
    exit;
}

$nama_user = $_SESSION['username'];
$role = $_SESSION['role']; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard <?= ucfirst($role); ?></title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; display: flex; height: 100vh; background-color: #363636; }
        .sidebar { width: 250px; background-color: #111111; color: white; padding: 20px 0; display: flex; flex-direction: column; min-height: 100vh; }
        .sidebar h2 { text-align: center; font-size: 20px; margin-bottom: 20px; }
        .sidebar a { padding: 15px 20px; color: white; text-decoration: none; display: block; border-bottom: 1px solid #333; transition: 0.3s; }
        .sidebar a:hover { background-color: #EFBA36; color: #111; }
        .main-content { flex-grow: 1; display: flex; flex-direction: column; overflow-y: auto; }
        .top-bar { background-color: #222; padding: 15px 30px; color: white; display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid #EFBA36; }
        .welcome-text b { color: #EFBA36; text-transform: capitalize; }
        .content-body { padding: 30px; }
        .card-welcome { background: white; padding: 20px; border-radius: 10px; border-left: 5px solid #EFBA36; margin-bottom: 20px; }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>🅿 ParkirApp</h2>
    <a href="dashboardmin.php">🏠 Dashboard</a>

    <?php if($role == 'admin'): ?>
        <a href="crud_user.php">👤 Kelola User</a>
        <a href="tarif.php">💰 Kelola Tarif</a>
        <a href="area.php">⭕ Kelola Area</a>
        <a href="laporan_kendaraan.php">🚗 Data Kendaraan</a>
        <a href="log.php">📋 Aktivitas</a>
    <?php endif; ?>

    <?php if($role == 'petugas'): ?>
        <a href="../petugas/input_transaksi.php">📝 Input Transaksi</a>
        <a href="../petugas/keluar.php">🚗 input keluar</a>
    <?php endif; ?>

    <?php if($role == 'owner'): ?>
        <a href="../owner/rekap_owner.php">📊 Rekapan Laporan</a>
    <?php endif; ?>

    <a href="../auth/logout.php" onclick="return confirm('Yakin ingin keluar?')">🚪 Logout</a>
</div>

<div class="main-content">
    <div class="top-bar">
        <div class="welcome-text">
            Selamat Datang, <b><?= $nama_user; ?></b> (<i><?= $role; ?></i>)
        </div>
        <div class="date-now"><?= date('d M Y'); ?></div>
    </div>
    <div class="content-body">
        <div class="card-welcome">
            <h1 style="margin:0;">Halo, <?= $nama_user; ?>! 👋</h1>
            <p style="margin: 10px 0 0;">Anda login sebagai <b><?= $role; ?></b>. Silahkan gunakan menu di samping untuk mengelola sistem parkir.</p>
        </div>
    </div>
</div>

</body>
</html>
