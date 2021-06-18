<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME PENGGUNA</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
  <h3>SELAMAT DATANG DI APLIKASI CARI KERJA</h3>
  <br>
  <a class="btn green waves-effect waves-light" href="pengajuan.php">AJUKAN DIRI</a>
  <a class="btn green waves-effect waves-light" href="daftar-loker.php">INFO LOKER</a>
  <a class="btn green waves-effect waves-light" href="logout.php">LOGOUT</a>
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
