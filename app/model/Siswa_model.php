<?php

class Siswa_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSiswa($data)
    {
        $this->db->query("SELECT * FROM siswa WHERE nisn=:nisn and nis=:nis");
        $this->db->bind("nisn", $data["username"]);
        $this->db->bind("nis", $data["password"]);

        return $this->db->result();
    }
    public function insertData($data)
    {
        $this->db->query("SELECT * FROM siswa WHERE nisn=:nisn");
        $this->db->bind("nisn", $data["nisn"]);
        $siswa = $this->db->result();
        $this->db->query("SELECT * FROM petugas WHERE username=:nisn");
        $this->db->bind("nisn", $data["nisn"]);
        $petugas = $this->db->result();
        if ($siswa) {
            echo "<script>
				alert('username sudah terdaftar');
                document.location.href='http://localhost/spp/public/register';
			</script>";
            return false;
        } else if ($petugas) {
            echo "<script>
				alert('username sudah terdaftar');
                document.location.href='http://localhost/spp/public/register';
			</script>";
            return false;
        }
        if ($data["nis"] !== $data["nis2"]) {
            echo "<script>
        		alert('password yang dimasukan tidak sama');
                document.location.href='http://localhost/spp/public/register';
        	</script>";
            return false;
        }

        $this->db->query("INSERT INTO siswa 
                          VALUES 
                          (:nisn,:nis,:nama,:id_kelas,:alamat,:no_telp,:id_spp)
        ");
        $this->db->bind("nisn", $data["nisn"]);
        $this->db->bind("nis", $data["nis"]);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("id_kelas", $data["id_kelas"]);
        $this->db->bind("alamat", $data["alamat"]);
        $this->db->bind("no_telp", $data["telp"]);
        $this->db->bind("id_spp", $data["id_spp"]);
        $this->db->execute();
        return $this->db->hitungBaris();
    }
}
