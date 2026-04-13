<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
ob_start();


require_once __DIR__ . "/../Models/m_koneksi.php";
require_once __DIR__ . "/../Models/LogModel.php";
require_once __DIR__ . "/../Models/mcuser.php"; 

$obj_user = new user();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $obj_user->login($username, $password); 

    if ($data) {
        $_SESSION['id_user']  = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = strtolower($data['role']); 
        $_SESSION['status']   = "login";

        $database = new m_koneksi();
        $log = new LogModel($database->koneksi);
        
       
        $log->saveLog($data['username'], 'LOGIN');

        header("Location: /UKKPAKET2_WINDAMARLIANI/views/admin/dashboardmin.php");
        exit;
    } else {
        
        echo "<script>alert('Login Gagal! Username atau Password salah.'); window.location.href='../index.php';</script>";
        exit;
    }
}
?>