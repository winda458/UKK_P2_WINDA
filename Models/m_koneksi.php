<?php
class m_koneksi {
    private $host = "localhost",
            $username = "root",
            $pass = "",
            $db = "ukkpaket2_windamarlianiani"; 
    
    public $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db);
        
        if (!$this->koneksi) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }
    }
}

$db_obj = new m_koneksi();
$conn = $db_obj;
?>