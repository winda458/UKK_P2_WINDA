<?php 
session_start();
require_once __DIR__ . "/../../Models/m_koneksi.php";
require_once __DIR__ . "/../../Models/LogModel.php";

if (isset($_SESSION['username'])) {
    $database = new m_koneksi();
    $log = new LogModel($database->koneksi);
    
    $log->saveLog($_SESSION['username'], 'LOGOUT');
}

session_unset(); 
session_destroy(); 

header("location: /UKKPAKET2_WINDAMARLIANI/index.php"); 
exit;
?>