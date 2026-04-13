<?php
require_once "../../Models/m_transaksi.php";
$model = new m_transaksi();
$rekap = $model->getRekapTransaksi();
$total_duit = $model->getTotalPendapatan();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekap Owner - ParkirApp</title>
    <style>
        body { background: #1a1a1a; color: white; font-family: 'Segoe UI', sans-serif; padding: 20px; }
        h2 { color: #EFBA36; text-align: center; }
        
        .total-card { 
            background: #222; 
            padding: 15px; 
            border-radius: 8px; 
            border-left: 5px solid #EFBA36; 
            margin-bottom: 20px; 
            text-align: center;
        }

        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #222; }
        th, td { border: 1px solid #444; padding: 12px; text-align: center; }
        th { background: #EFBA36; color: black; }
        tr:nth-child(even) { background: #2a2a2a; }

        .btn-container { margin-top: 30px; text-align: center; }
        
        .btn-kembali {
            display: inline-block;
            padding: 12px 25px;
            background-color: transparent;
            color: #EFBA36;
            border: 2px solid #EFBA36;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-kembali:hover {
            background-color: #EFBA36;
            color: #1a1a1a;
        }
    </style>
</head>
<body>

    <h2>📊 REKAP TRANSAKSI PARKIR</h2>

    <div class="total-card">
        <p style="margin: 0; color: #ccc;">Total Pendapatan Keseluruhan:</p>
        <h2 style="margin: 10px 0; font-size: 32px;">Rp <?= number_format($total_duit, 0, ',', '.') ?></h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Plat</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th>Durasi</th>
                <th>Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            while($row = mysqli_fetch_assoc($rekap)): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= strtoupper($row['no_plat'] ?: '-') ?></td>
                <td><?= $row['waktu_masuk'] ?></td>
                <td><?= $row['waktu_keluar'] ?></td>
                <td><?= $row['durasi_jam'] ?? 0 ?> Jam</td>
                <td>Rp <?= number_format($row['biaya_total'] ?? 0, 0, ',', '.') ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <div class="btn-container">
        <a href="../admin/dashboardmin.php" class="btn-kembali">← KEMBALI KE DASHBOARD</a>
    </div>

</body>
</html>
