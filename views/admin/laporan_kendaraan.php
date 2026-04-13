<?php
session_start();
require_once "../../Controller/LaporanKendaraan_c.php";

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:../../index.php");
    exit;
}

$laporan = new LaporanKendaraan_c();
$query = $laporan->getKendaraanAktif();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kendaraan Aktif</title>
    <style>
        body { background-color: #363636; font-family: 'Segoe UI', sans-serif; color: white; padding: 40px; margin: 0; }
        .container { background: #111; padding: 30px; border-radius: 15px; border-top: 5px solid #EFBA36; box-shadow: 0 10px 30px rgba(0,0,0,0.5); max-width: 900px; margin: auto; }
        h2 { color: #EFBA36; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; }
        p { color: #888; font-size: 14px; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; background: #1a1a1a; border-radius: 10px; overflow: hidden; }
        th { background: #EFBA36; color: #111; padding: 15px; text-align: left; font-size: 14px; }
        td { padding: 15px; border-bottom: 1px solid #333; font-size: 14px; color: #eee; }
        .plat { color: #EFBA36; font-weight: bold; font-family: 'Courier New', monospace; font-size: 16px; }
        .badge-status { background: rgba(92, 184, 92, 0.2); color: #5cb85c; padding: 4px 10px; border-radius: 4px; font-size: 11px; border: 1px solid #5cb85c; }
        .btn-back { display: inline-block; margin-top: 25px; color: #EFBA36; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>🚗 Kendaraan Terparkir</h2>
    <p>Monitoring data kendaraan yang sedang berada di area parkir.</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>No. Plat</th>
                <th>Jenis</th>
                <th>Lokasi Area</th>
                <th>Waktu Masuk</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
    <?php 
    $no = 1;
    if (mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)): 
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><span class="plat"><?= $row['no_plat']; ?></span></td>
        <td><?= ucfirst($row['jenis_kendaraan']); ?></td>
        <td>📍 <?= $row['nama_area']; ?></td>
        <td><?= date('H:i', strtotime($row['waktu_masuk'])); ?> WIB</td>
        <td><span class="badge-status">Parkir</span></td>
    </tr>
    <?php 
        endwhile; 
    } else {
        echo "<tr><td colspan='5' style='text-align:center; padding:20px;'>masi kosong, belum ada yang parkir.</td></tr>";
    }
    ?>
</tbody>

    </table>

    <a href="dashboardmin.php" class="btn-back">← Kembali ke Dashboard</a>
</div>

</body>
</html>
