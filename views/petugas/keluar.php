<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kendaraan Keluar</title>
    <style>
        body { background-color: #363636; font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: #111; padding: 30px; border-radius: 15px; border-top: 5px solid #EFBA36; text-align: center; width: 400px; }
        input { width: 80%; padding: 10px; margin: 15px 0; border-radius: 5px; border: 1px solid #EFBA36; background: #222; color: #fff; text-align: center; font-size: 18px; }
        .btn-keluar { background: #EFBA36; color: #111; padding: 10px 20px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; width: 85%; }
    </style>
</head>
<body>
    <div class="container">
    <h2 style="color: #EFBA36;">🚗 KENDARAAN KELUAR</h2>
    <form action="../../Controller/keluar_c.php" method="POST">
        <p style="color: #ccc;">Masukkan Plat Nomor Kendaraan:</p>
        <input type="text" name="plat" placeholder="Contoh: B 1234 ABC" required autofocus>
        <button type="submit" class="btn-keluar">PROSES KELUAR</button>
    </form>
    <br>
    <a href="../admin/dashboardmin.php" style="color: #888; text-decoration: none; font-size: 12px;">← Kembali ke Dashboard</a>
</div>

</body>
</html>
