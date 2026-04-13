<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk - <?= $data['id_parkir']; ?></title>
    <style>
        @media print { .no-print { display: none; } }
        body { 
            font-family: 'Courier New', monospace; 
            width: 58mm; 
            padding: 10px; 
            background: #fff; 
            color: #000; 
        }
        .text-center { text-align: center; }
        .line { border-bottom: 1px dashed #000; margin: 5px 0; }
        .item { display: flex; justify-content: space-between; font-size: 12px; }
    </style>
</head>
<body onload="window.print();">

    <div class="text-center">
        <h3 style="margin:0;">PARKIR APP</h3>
        <small>Bukti Masuk Kendaraan</small>
    </div>

    <div class="line"></div>

    <div class="text-center" style="margin: 10px 0;">
        <b>ID: <?= $data['id_parkir']; ?></b>
    </div>

    <div class="item">
        <span>Plat:</span>
        <span><?= strtoupper($data['no_plat']); ?></span>
    </div>

    <div class="item">
        <span>Jenis:</span>
        <span><?= strtoupper($data['jenis_kendaraan']); ?></span>
    </div>

    <div class="item">
        <span>Area:</span>
        <span><?= $data['nama_area']; ?></span>
    </div>

    <div class="item">
        <span>Jam:</span>
        <span><?= date('H:i:s', strtotime($data['waktu_masuk'])); ?></span>
    </div>

    <div class="item">
        <span>Tgl:</span>
        <span><?= date('d/m/Y', strtotime($data['waktu_masuk'])); ?></span>
    </div>

    <div class="line"></div>

    <div class="text-center" style="font-size: 10px;">
        SIMPAN STRUK INI
    </div>

    <div class="no-print" style="margin-top: 20px; text-align: center;">
        <a href="../views/petugas/input_transaksi.php" style="color: blue; text-decoration: none;">
            [ KEMBALI ]
        </a>
    </div>

</body>
</html>