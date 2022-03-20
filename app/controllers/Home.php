<?php

class Home extends Controller
{

    public function index()
    {
        if ($_SESSION["login"] == "petugas") {
            $data["judul"] = "Halaman Petugas";
        } else if ($_SESSION["login"] == "admin") {
            $data["judul"] = "Halaman Admin";
        } else if ($_SESSION["login"] == "siswa") {
            $data["judul"] = "Halaman Siswa";
        }
        $this->view("templates/header", $data);
        $this->view("home/admin");
        $this->view("templates/footer");
    }
}
