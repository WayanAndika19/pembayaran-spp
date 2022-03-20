<?php
class Login extends Controller
{

    public function index()
    {
        $data["judul"] = "Halaman Login";
        $this->view("templates/header", $data);
        $this->view("login/login");
        $this->view("templates/footer");
    }

    public function login()
    {
        error_reporting(0);
        $password = $_POST["password"];

        $data_petugas = $this->model('Petugas_model')->getPetugas($_POST);
        $data_siswa = $this->model('Siswa_model')->getSiswa($_POST);
        // var_dump($data_siswa);
        // var_dump($data_petugas);
        // exit;
        if ($data_petugas[0]["level"] == "admin") {
            $_SESSION["login"] = "admin";
            $_SESSION["nama"] = $data_petugas[0]["username"];
            header("Location:" . BASEURL . "/home");
            exit;
        } else if ($data_petugas[0]["level"] == "petugas") {
            $_SESSION["login"] = "petugas";
            $_SESSION["nama"] = $data_petugas[0]["username"];
            header("Location:" . BASEURL . "/home");
            exit;
        } else if ($data_siswa[0]) {
            $_SESSION["login"] = "siswa";
            $_SESSION["nama"] = $data_siswa[0]["nama"];
            header("Location:" . BASEURL . "/home");
            exit;
        } else {
            echo "<script>
                alert('username/password salah');
                document.location.href='http://localhost/spp/public'
                </script>";
        }
    }
}
