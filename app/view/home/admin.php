<h1>
    Ini Halaman Login Sebagai
    <?php if ($_SESSION["login"] == "petugas") { ?>
        Petugas
    <?php } else if ($_SESSION["login"] == "admin") { ?>
        Admin
    <?php } else { ?>
        Siswa
    <?php } ?>

</h1>
<h3>
    Hai <?php echo ucfirst($_SESSION["nama"]) ?>, Selamat Datang
</h3>
<br><br><br>
<a href="<?= BASEURL; ?>/logout" class="a">Logout</a>