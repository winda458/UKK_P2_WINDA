<?php
include_once __DIR__ . '/../Models/m_koneksi.php'; 
include_once __DIR__ . '/../Models/LogModel.php';

$database = new m_koneksi(); 
$db = $database->koneksi; 

$logModel = new LogModel($db);
$stmt = $logModel->readAll();
?>
