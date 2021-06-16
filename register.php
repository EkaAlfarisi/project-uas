<!DOCTYPE html>
<html>
<head>
  <title>FORM REGISTER</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
  <h2>Register Sebagai individu</h2>
  <hr>
  <br>
  <br>
  <br>
  <form action="aksi-register.php" method="post">
    <div class="input-field">
      <input type="text" name="nama" id="nama" required>
      <label for="nama">NAMA</label>
    </div>
    <div class="input-field">
      <input type="text" name="alamat" id="alamat" required>
      <label for="alamat">ALAMAT</label>
    </div>
    <div class="input-field">
      <input type="text" name="no_telp" id="no_telp" required>
      <label for="no_telp">NO TELPON</label>
    </div>
    <div class="input-field">
      <input type="text" name="username" id="username" required>
      <label for="username">USERNAME</label>
    </div>
    <div class="input-field">
      <input type="password" name="password" id="password" required>
      <label for="password">PASSWORD</label>
    </div>
    <div class="input-field">
      <select name="akses" id="akses">
        <option value="user">USER</option>
        <option value="perusahaan">PERUSAHAAN</option>
      </select>
      <label for="akses">LOGIN SEBAGAI</label>
    </div>
    <a class="btn green waves-effect waves-light" href="index.php">Kembali</a>
    <input class="btn green waves-effect waves-light" type="submit" value="DAFTAR" name="register">
  </form>
</div>
<br>
<br>
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, null);
  });
</script>
</body>
</html>
