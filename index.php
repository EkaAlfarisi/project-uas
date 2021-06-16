<?php
session_start();
$msg = true;
if (isset($_POST['login'])) {
    include('koneksi.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $c = $mysqli->query("SELECT * FROM pengguna WHERE username='$user' AND password='$pass';");
        if ($c->num_rows == 1) {
            $us = $c->fetch_row();
            $_SESSION['id'] = $us[0];
            $_SESSION['nama'] = $us[1];
            $_SESSION['alamat'] = $us[2];
            $_SESSION['no_telp'] = $us[3];
            if ($us[11] === 'user') header('Location: home-pelamar.php');
            else if ($us[11] === 'perusahaan') header('Location: home-perusahaan.php');
        } else {
            $msg = false;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
  <h2>LOGIN</h2>
  <br>
    <?php
    if (!$msg) { ?>
      <blockquote>Username/Password Salah</blockquote>
    <?php } ?>
  <form action="index.php" method="post">
    <div class="input-field">
      <input type="text" name="username" id="username" required>
      <label for="username">USERNAME</label>
    </div>
    <div class="input-field">
      <input type="password" name="password" id="password" required>
      <label for="password">PASSWORD</label>
    </div>
    <br>
    <input class="btn blue waves-effect waves-light" type="submit" value="LOGIN" name="login">
  </form>
  <blockquote>Jika Anda Belum Memiliki Akun Silahkan Register Terlebih Dahulu</blockquote>
  <a class="btn green waves-effect waves-light" href="register.php">Register</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, null);
  });
</script>
</body>
</html>
