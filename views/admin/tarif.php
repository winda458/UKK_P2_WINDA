<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Tarif Parkir</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #363636; 
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }


        .main-wrapper {
            display: flex;
            gap: 30px;
            width: 90%;
            max-width: 900px;
            align-items: flex-start;
        }

        .table-container {
            flex: 1.5; /* Lebih lebar sedikit */
            background: #111;
            padding: 25px;
            border-radius: 12px;
            border-top: 4px solid #EFBA36;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        /* Container Form (Kanan) */
        .container {
            flex: 1;
            background-color: #111111;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border-top: 4px solid #EFBA36;
        }

        h2, h3 { color: #EFBA36; text-align: center; margin-bottom: 20px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; }
        p { color: #ccc; text-align: center; font-size: 13px; margin-bottom: 20px; }
        
        /* Form & Input */
        form { display: flex; flex-direction: column; gap: 15px; }
        .form-group { display: flex; flex-direction: column; gap: 8px; }
        label { color: #EFBA36; font-weight: 600; font-size: 14px; }
        input, select {
            background-color: #222; border: 1px solid #444; color: white;
            padding: 12px; border-radius: 8px; font-size: 14px; outline: none;
        }
        .input-wrapper { position: relative; display: flex; align-items: center; }
        .input-wrapper span { position: absolute; left: 15px; color: #EFBA36; font-weight: bold; }
        .input-wrapper input { padding-left: 45px; width: 100%; box-sizing: border-box; }


        .btn-save {
            background-color: #EFBA36; color: #111; padding: 12px; border: none;
            border-radius: 8px; font-size: 15px; font-weight: bold; cursor: pointer;
            text-transform: uppercase; transition: 0.3s;
        }
        .btn-save:hover { background-color: #d4a52e; }


        .btn-back {
            display: inline-block;
            text-decoration: none;
            color: #EFBA36;
            border: 1px solid #EFBA36;
            padding: 8px 15px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
            transition: 0.3s;
        }
        .btn-back:hover { background: #EFBA36; color: #111; }

        /* Styling Tabel */
        table { width: 100%; border-collapse: collapse; color: white; }
        th { background: #EFBA36; color: #111; padding: 10px; font-size: 13px; }
        td { padding: 12px; border-bottom: 1px solid #333; text-align: center; font-size: 14px; }
        

        @media (max-width: 768px) {
            .main-wrapper { flex-direction: column-reverse; align-items: center; }
            .table-container, .container { width: 100%; }
        }
    </style>
</head>
<body>

<?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'berhasil'): ?>
    <script>
        alert('Mantap! Tarif berhasil diperbarui.');
        window.history.replaceState({}, document.title, "tarif.php");
    </script>
<?php endif; ?>

<div class="main-wrapper">
    
    <div class="table-container">
        <a href="dashboardmin.php" class="btn-back">← Kembali ke Dashboard</a>
        
        <h3>Daftar Tarif Aktif</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Kendaraan</th>
                    <th>Tarif / Jam</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../Models/m_koneksi.php';
                $koneksi = $conn->koneksi;
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_tarif");
                if(mysqli_num_rows($tampil) > 0) {
                    while($r = mysqli_fetch_array($tampil)):
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td style="text-transform: capitalize;"><?= $r['jenis_kendaraan']; ?></td>
                        <td>Rp <?= number_format($r['tarif_per_jam'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php 
                    endwhile; 
                } else {
                    echo "<tr><td colspan='3'>Kosong</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Konfigurasi</h2>
        <p>Sesuaikan biaya per jam</p>

        <form action="../../Controller/tarif_c.php?action=simpan" method="POST">
            <div class="form-group">
                <label>Jenis Kendaraan</label>
                <select name="jenis_kendaraan">
                    <option value="motor">Motor</option>
                    <option value="mobil">Mobil</option>
                    <option value="truk">Truk / Bus</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tarif per Jam</label>
                <div class="input-wrapper">
                    <span>Rp</span>
                    <input type="number" name="tarif_per_jam" placeholder="0" required>
                </div>
            </div>
            
            <button type="submit" class="btn-save">Update Tarif</button>
        </form>
    </div>

</div>

</body>
</html>
