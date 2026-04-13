<?php
class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($username, $password) {
        $query = mysqli_query(
            $this->conn,
            "SELECT * FROM db_user 
             WHERE username='$username' 
             AND password='$password'"
        );

        if (mysqli_num_rows($query) > 0) {
            return mysqli_fetch_assoc($query);
        }
        return false;
    }
}