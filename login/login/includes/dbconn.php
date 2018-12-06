<?php

class DbConn
{
    public $conn;
    public function __construct()
    {
        require 'dbconf.php';
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->tbl_prefix = $tbl_prefix;
        $this->tbl_members = $tbl_members;
        $this->tbl_attempts = $tbl_attempts;
        $this->conn = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8', $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
