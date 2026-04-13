<?php
ob_start(); 
session_start();

include_once __DIR__ . '/../Models/m_koneksi.php';
include_once __DIR__ . '/../Models/LogModel.php';

if (isset($_SESSION['id_user'])) {
    $database = new m_koneksi();
    $db = $database->koneksi;
    
    $log = new LogModel($db);
    $log->saveLog($_SESSION['id_user'], 'Logout');
}

session_unset();
session_destroy();

header("location:../views/auth/login.php");
exit;
ob_end_flush(); 
