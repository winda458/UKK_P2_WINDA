<?php
include_once __DIR__ . "/m_koneksi.php";

class user
{
    private $koneksi;

    public function __construct()
    {
        $db = new m_koneksi();
        $this->koneksi = $db->koneksi;
    }

    public function getSummary() {
        $userCount = mysqli_query($this->koneksi, "SELECT COUNT(*) as total FROM db_user");
        return mysqli_fetch_assoc($userCount);
    }

    public function login($username, $password) {

        $query = mysqli_query($this->koneksi, "SELECT * FROM db_user WHERE username='$username' AND password='$password'");
        return mysqli_fetch_assoc($query); 
    }
    
    public function tampiluser()
    {
        return mysqli_query($this->koneksi, "SELECT * FROM db_user");
    }

    public function tambah_user($username, $password, $role)
    {
        return mysqli_query(
            $this->koneksi,
            "INSERT INTO db_user VALUES (NULL,'$username','$password','$role')"
        );
    }

    public function edit_user($id, $username, $password, $role)
    {
        return mysqli_query(
            $this->koneksi,
            "UPDATE db_user SET username='$username', password='$password', role='$role' WHERE id='$id'"
        );
    }

    public function hapus_user($id)
    {
        return mysqli_query($this->koneksi, "DELETE FROM db_user WHERE id='$id'");
    }

    public function getuserbyid($id)
    {
        $q = mysqli_query($this->koneksi, "SELECT * FROM db_user WHERE id='$id'");
        return mysqli_fetch_assoc($q);
    }
} 
