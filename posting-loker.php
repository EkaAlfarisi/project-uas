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
  <h2>Form Pengajuan Lowongan Kerja</h2>
  <hr>
  <a class="btn green waves-effect waves-light" href="home-perusahaan.php">Home</a>
  <br>
  <br>
  <form action="aksi-loker.php" method="post">
    <div class="input-field">
      <input type="text" name="nama-perusahaan" id="nama-perusahaan" required>
      <label for="nama-perusahaan">NAMA PERUSAHAAN</label>
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
      <select name="pendidikan" id="pendidikan">
        <option value="SMA">SMA</option>
        <option value="D3">D3</option>
        <option value="D4">D4</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
      <label for="pendidikan">PENDIDIKAN MINIMAL</label>
    </div>
    <div class="input-field">
      <input type="text" name="posisi" id="posisi" required>
      <label for="posisi">POSISI YANG DIBUTUHKAN</label>
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
