<?php
date_default_timezone_set('Asia/Jakarta');

$id     = $_GET['id'];
$plat   = $_GET['plat'];
$jenis  = $_GET['jenis'];
$masuk  = $_GET['masuk'];
$keluar = $_GET['keluar'];
$durasi = $_GET['durasi'];
$total  = $_GET['total'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Struk Keluar</title>

<style>
@media print { .no-print { display: none; } }

body {
    font-family: 'Courier New', monospace;
    width: 58mm;
    padding: 10px;
}

.text-center { text-align: center; }
.line { border-bottom: 1px dashed #000; margin: 5px 0; }

.item {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
}
</style>
</head>

<body onload="window.print();">

<div class="text-center">
    <h3 style="margin:0;">PARKIR APP</h3>
    <small>Bukti Keluar Kendaraan</small>
</div>

<div class="line"></div>

<div class="item"><span>ID:</span><span><?= $id ?></span></div>
<div class="item"><span>Plat:</span><span><?= strtoupper($plat) ?></span></div>
<div class="item"><span>Jenis:</span><span><?= strtoupper($jenis) ?></span></div>

<div class="line"></div>

<div class="item">
    <span>Masuk:</span>
    <span><?= date('H:i', strtotime($masuk)) ?></span>
</div>

<div class="item">
    <span>Keluar:</span>
    <span><?= date('H:i', strtotime($keluar)) ?></span>
</div>

<div class="item"><span>Durasi:</span><span><?= $durasi ?> jam</span></div>

<div class="line"></div>

<div class="item" style="font-weight:bold;">
    <span>Total:</span>
    <span>Rp <?= number_format($total) ?></span>
</div>

<div class="line"></div>

<div class="text-center" style="font-size: 10px;">
    TERIMA KASIH 🙏
</div>

<div class="no-print" style="text-align:center; margin-top:10px;">
    <a href="keluar.php">[ Kembali ]</a>
</div>

</body>
</html>