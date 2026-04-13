<?php
ob_start();
include_once __DIR__ . "/../Models/mcuser.php";

$user = new user();
$model = new user();
$summary = $model->getSummary();
// TAMBAH
if (isset($_POST['tambah'])) {
    $user->tambah_user(
        $_POST['username'],
        $_POST['password'],
        $_POST['role']
    );
    header("Location: ../views/admin/crud_user.php");
    exit;
}

// UPDATE
if (isset($_POST['update'])) {
    $user->edit_user(
        $_POST['id'],
        $_POST['username'],
        $_POST['password'],
        $_POST['role']
    );
    header("Location: ../views/admin/crud_user.php");
    exit;
}

// HAPUS
if (isset($_GET['hapus'])) {
    $user->hapus_user($_GET['hapus']);
    header("Location: ../views/admin/crud_user.php");
    exit;
}

// EDIT (AMBIL DATA)
$dataEdit = null;
if (isset($_GET['edit'])) {
    $dataEdit = $user->getuserbyid($_GET['edit']);
}

// TAMPIL DATA
$query = $user->tampiluser();