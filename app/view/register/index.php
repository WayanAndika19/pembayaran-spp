<div class="container-r">
    <form action="<?= BASEURL; ?>/register/register" method="post" class="form">
        <h2>Halaman Register</h2>
        <label for="username">Username</label>
        <input type="text" name="nisn" id="username" class="input-login" autocomplete="off">
        <label for="password">Password</label>
        <input type="password" name="nis" id="password" class="input-login">
        <label for="pass2">Konfirmasi Password</label>
        <input type="password" name="nis2" id="password" class="input-login">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="input-login" autocomplete="off">
        <label for="id-kelas">ID Kelas</label>
        <select class="input-login " name="id_kelas">
            <option value="" disabled selected>--ID Kelas--</option>
            <option class="option">1</option>
            <option class="option">2</option>
            <option class="option">3</option>
            <option class="option">4</option>
        </select>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="" rows="3" class="input-login"></textarea>
        <label for="telp">No Telp</label>
        <input type="text" name="telp" id="telp" class="input-login" autocomplete="off">
        <label for="id-spp">ID SPP</label>
        <select class="input-login " name="id_spp">
            <option value="" disabled selected>--ID SPP--</option>
            <option class="option">1</option>
            <option class="option">2</option>
        </select>
        <button type="submit" name="submit" class="submit">REGISTER</button>
        <hr>
        <p>Sudah punya akun? <a href="<?= BASEURL; ?>/login">Login</a></p>
    </form>
</div>