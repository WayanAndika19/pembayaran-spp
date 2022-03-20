<?php

class Petugas_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getPetugas($data)
    {
        $this->db->query("SELECT * FROM petugas WHERE username=:username and password=:password");
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", md5($data["password"]));

        return $this->db->result();
    }
}
