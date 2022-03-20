<div class="container">

    <a class="img-login" href="https://id.pngtree.com/so/telepon-genggam">
        <img src="<?= BASEURL; ?>/img/1.png" alt="">
    </a>
    <form action="<?= BASEURL; ?>/login/login" method="post" class="form">
        <h2>Halaman Login</h2>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="input-login" autocomplete="off">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="input-login">
        <button type="submit" name="submit" class="submit">LOGIN</button>
        <hr>
        <p>Belum punya akun? <a href="<?= BASEURL; ?>/register">Register</a></p>
    </form>
</div>