<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("location:../../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Karcis Masuk</title>
    <style>
        body { background-color: #363636; font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: #111; padding: 30px; border-radius: 15px; border-top: 5px solid #EFBA36; text-align: center; width: 90%; max-width: 500px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); }
        .btn-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 20px; }
        .btn-parkir { padding: 30px 10px; border: none; border-radius: 10px; font-weight: bold; cursor: pointer; transition: 0.3s; font-size: 16px; }
        .btn-motor { background: #EFBA36; color: #111; }
        .btn-mobil { background: #fff; color: #111; }
        .btn-parkir:hover { transform: translateY(-5px); opacity: 0.9; }
        .petugas-info { color: #888; margin-top: 20px; font-size: 13px; border-top: 1px solid #333; padding-top: 15px; }
        .btn-link { text-decoration: none; color: #888; font-size: 12px; transition: 0.3s; display: inline-block; margin-top: 10px; }
        .btn-link:hover { color: #EFBA36; }
    </style>
</head>
<body>

    <div class="container">
        <h2 style="color: #EFBA36; margin-top: 0;">🅿️ CETAK KARCIS MASUK</h2>
        <p style="color: #ccc;">Pilih jenis kendaraan yang masuk:</p>
        
        <form action="../../Controller/tarif_c.php" method="POST">
          <input type="text" name="plat" placeholder="Masukkan No. Plat" required 
            style="width:90%; padding:10px; margin-bottom:15px; border-radius:8px; border:none; text-align:center; font-weight:bold;">
          
            <div class="btn-grid">
                <button type="submit" name="jenis" value="motor" class="btn-parkir btn-motor">
                    MKOTOR<br><small style="font-weight: normal; font-size: 10px;">Klik untuk Cetak</small>
                </button>
                
                <button type="submit" name="jenis" value="mobil" class="btn-parkir btn-mobil">
                    MOBIL<br><small style="font-weight: normal; font-size: 10px;">Klik untuk Cetak</small>
                </button>
            </div>
        </form>
        
        <div class="petugas-info">
            Petugas Aktif: <b style="color: #EFBA36;"><?= $_SESSION['username']; ?></b>
            <br>
            <a href="../admin/dashboardmin.php" class="btn-link">← Kembali ke Dashboard</a>
        </div>
    </div>

</body>
</html>