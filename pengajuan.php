<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>FORM PENGAJUAN</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
  <h2>FORM PENGAJUAN DIRI</h2>
  <hr>
  <a class="btn green waves-effect waves-light" href="index.php">HOME</a>
  <br>
  <br>
  <br>
  <form action="aksi-pengajuan.php" method="post">
    <div class="input-field">
      <input type="text" name="nama" id="nama" value="<?php if (isset($_SESSION['nama'])) echo $_SESSION['nama']; ?>" required disabled>
      <label for="nama">NAMA</label>
    </div>
    <div class="input-field">
      <input type="text" name="alamat" id="alamat" value="<?php if (isset($_SESSION['alamat'])) echo $_SESSION['alamat']; ?>" required disabled>
      <label for="alamat">ALAMAT</label>
    </div>
    <div class="input-field">
      <input type="text" name="no_telp" id="no_telp" value="<?php if (isset($_SESSION['no_telp'])) echo $_SESSION['no_telp']; ?>" required disabled>
      <label for="no_telp">NO TELPON</label>
    </div>
    <div class="input-field">
      <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
      <label for="tanggal_lahir">TANGGAL LAHIR</label>
    </div>
    <div class="input-field">
      <select name="pendidikan" id="pendidikan">
        <option value="SMA">SMA</option>
        <option value="D3">D3</option>
        <option value="D4">D4</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
      <label for="pendidikan">PENDIDIKAN</label>
    </div>
    <div class="input-field">
      <input type="text" name="jurusan" id="jurusan" placeholder="Jurusan" required>
      <label for="jurusan">JURUSAN</label>
    </div>
    <div class="input-field">
      <input type="text" name="lembaga_pendidikan" id="lembaga_pendidikan" placeholder="Lembaga Pendidikan" required>
      <label for="lembaga-pendidikan">NAMA LEMBAGA PENDIDIKAN</label>
    </div>
    <input class="btn green waves-effect waves-light" type="submit" value="TAMBAH" name="tambah">
  </form>
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
