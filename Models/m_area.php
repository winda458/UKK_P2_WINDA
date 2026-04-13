<?php
require_once "m_koneksi.php";

class m_area {
    private $koneksi;

    function __construct() {
        $db = new m_koneksi();
        $this->koneksi = $db->koneksi;
    }

    function tampil_area() {
        return mysqli_query($this->koneksi, "SELECT * FROM area_parkir ORDER BY nama_area DESC");
    }
}