<?php

class Register extends Controller
{

    public function index()
    {
        $data["judul"] = "Halaman Register";
        $this->view("templates/header", $data);
        $this->view("register/index");
        $this->view("templates/footer");
    }

    public function register()
    {
        if ($this->model('Siswa_model')->insertData($_POST) > 0) {
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                    document.location.href='http://localhost/spp/public';
                </script>";
        } else {
            echo "<script>
                    alert('user baru gagal ditambahkan');
                    document.location.href='http://localhost/spp/public';
                </script>";
        }
    }
}
