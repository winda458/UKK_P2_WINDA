<?php
session_start();
require_once "../../Models/m_koneksi.php";

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:../auth/login.php");
    exit;
}

$database = new m_koneksi();
$koneksi = $database->koneksi;

$query = mysqli_query($koneksi, "SELECT * FROM area_parkir ORDER BY nama_area DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Area Parkir</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #363636;
            margin: 0; padding: 0;
            display: flex; justify-content: center; align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 500px;
            background-color: #111111;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            border-top: 5px solid #EFBA36;
        }

        h2 { text-align: center; color: #EFBA36; margin-bottom: 5px; text-transform: uppercase; letter-spacing: 1px; }
        p { text-align: center; color: #bbb; margin-bottom: 30px; font-size: 14px; }

        ul { list-style: none; padding: 0; }

        ul li {
            background-color: #222;
            margin-bottom: 12px;
            padding: 18px;
            border-radius: 10px;
            font-weight: bold;
            color: #fff;
            display: flex;
            align-items: center;
            border: 1px solid #333;

        }


        .icon-area { margin-right: 15px; font-size: 22px; }

        .btn-back {
            display: block;
            text-align: center;
            margin-top: 25px;
            text-decoration: none;
            color: #111;
            background-color: #EFBA36;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-back:hover { background-color: #d4a52e; }

        .badge {
            margin-left: auto;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        .tersedia { background: rgba(92, 184, 92, 0.2); color: #5cb85c; border: 1px solid #5cb85c; }
        .penuh { background: rgba(217, 83, 79, 0.2); color: #d9534f; border: 1px solid #d9534f; }
        .info-slot { font-size: 13px; color: #EFBA36; margin-left: 10px; font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Kapasitas Parkir</h2>
        <p>Status ketersediaan slot kendaraan saat ini</p>

        <ul>
            <?php 
            if (mysqli_num_rows($query) > 0) {
                while($row = mysqli_fetch_assoc($query)): 
                    $sisa = $row['kapasitas'] - $row['terisi'];
                    $status_class = ($sisa <= 0) ? 'penuh' : 'tersedia';
                    $status_text = ($sisa <= 0) ? 'Penuh' : 'Tersedia';
                    

                    $icon = (strpos(strtolower($row['nama_area']), 'mobil') !== false) ? '🚗' : '🏍️';
            ?>
                <li>
                    <span class="icon-area"><?= $icon; ?></span>
                    <div>
                        <div style="font-size: 16px;"><?= $row['nama_area']; ?></div>
                        <div style="font-size: 11px; color: #666; font-weight: normal;">Total Kapasitas: <?= $row['kapasitas']; ?></div>
                    </div>
                    <span class="info-slot"><?= $row['terisi']; ?>/<?= $row['kapasitas']; ?></span>
                    <span class="badge <?= $status_class; ?>"><?= $status_text; ?></span>
                </li>
            <?php 
                endwhile; 
            } else {
                echo "<p style='color:#555; text-align:center;'>Belum ada data area di database.</p>";
            }
            ?>
        </ul>

        <a href="dashboardmin.php" class="btn-back">← Kembali ke Dashboard</a>
    </div>

</body>
</html>
