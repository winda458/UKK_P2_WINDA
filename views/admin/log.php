<?php
include '../../Controller/Log_c.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Aktivitas</title>
    <style>
        body {
            background-color: #363636; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
            margin: 0;
        }


        .btn-back {
            display: inline-block;
            text-decoration: none;
            color: #EFBA36;
            border: 1px solid #EFBA36;
            padding: 9px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 25px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: #EFBA36;
            color: #111;
            transform: translateX(-5px);
        }


        .log-container {
            background: #111111; 
            padding: 30px; 
            border-radius: 15px; 
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border-top: 4px solid #EFBA36;
            max-width: 900px;
            margin: 0 auto;
        }

        h2 {
            color: #EFBA36; 
            margin: 0 0 20px 0; 
            font-size: 22px; 
            text-transform: uppercase; 
            letter-spacing: 1.5px;
        }

        /* Styling Tabel */
        table {
            width: 100%; 
            border-collapse: collapse; 
            color: white;
        }

        thead tr {
            background: #EFBA36; 
            color: #111; 
        }

        th {
            padding: 15px; 
            text-align: left; 
            font-size: 14px;
            text-transform: uppercase;
        }

        td {
            padding: 15px; 
            border-bottom: 1px solid #222; 
            font-size: 14px;
        }


        tbody tr:hover {
            background-color: #1a1a1a;
        }


        .badge {
            padding: 6px 14px; 
            border-radius: 20px; 
            font-size: 11px; 
            font-weight: bold;
            display: inline-block;
            letter-spacing: 0.5px;
        }

        .badge-login {
            background-color: rgba(40, 167, 69, 0.15); 
            color: #28a745;
            border: 1px solid #28a745;
        }

        .badge-other {
            background-color: rgba(220, 53, 69, 0.15); 
            color: #dc3545;
            border: 1px solid #dc3545;
        }
    </style>
</head>
<body>

    <a href="dashboardmin.php" class="btn-back">← Kembali ke Dashboard</a>

    <div class="log-container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
            <h2>📜 Riwayat Aktivitas Terbaru</h2>
            <span style="font-size: 12px; color: #777;">Maksimal 10 log terakhir</span>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="border-radius: 8px 0 0 0; text-align: center; width: 50px;">No</th>
                    <th>Username</th>
                    <th style="text-align: center;">Aktivitas</th>
                    <th style="border-radius: 0 8px 0 0; text-align: right;">Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                if ($stmt && mysqli_num_rows($stmt) > 0) {
                    while ($row = mysqli_fetch_assoc($stmt)): 
                ?>
                <tr>
                    <td style="text-align: center; color: #555; font-weight: bold;"><?= $no++; ?></td>
                    <td><strong style="color: #fff;"><?= $row['id']; ?></strong></td>
                    <td style="text-align: center;">
                        <?php 
                        $aktifitas = strtoupper($row['aktifitas']);
                        $class_badge = ($aktifitas == 'LOGIN') ? 'badge-login' : 'badge-other';
                        ?>
                        <span class="badge <?= $class_badge; ?>">
                            <?= $aktifitas; ?>
                        </span>
                    </td>
                    <td style="text-align: right; color: #bbb; font-size: 13px;">
                        <?= date('d M Y | H:i', strtotime($row['waktu_aktivitas'])); ?> WIB
                    </td>
                </tr>
                <?php 
                    endwhile; 
                } else {
                    echo "<tr><td colspan='4' style='text-align:center; padding:50px; color:#555;'>Belum ada aktivitas tercatat.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
