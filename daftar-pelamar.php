<?php session_start();

include('koneksi.php');
$d = $mysqli->query("SELECT * FROM pengguna;"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAFTAR PELAMAR</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
  <h3>DAFTAR PELAMAR</h3>
  <br>
    <?php if ($d->num_rows == 0) { ?>
      <div class="card">
        <div class="card-content">
          <span class="card-title">Tidak ada data</span>
        </div>
      </div>
    <?php } else {
        while ($data = mysqli_fetch_assoc($d)) { ?>
          <div class="card">
            <div class="card-content">
              <span class="card-title">Nama: <?php echo $data['nama']; ?></span>
              <p>Tanggal Lahir: <?php echo $data['tanggal_lahir']; ?></p>
              <p>Alamat: <?php echo $data['alamat']; ?></p>
              <p>No Telp: <?php echo $data['no_telpon']; ?></p>
              <p>Lembaga: <?php echo $data['nama_lembaga_pendidikan']; ?></p>
              <p>Pendidikan: <?php echo $data['pendidikan']; ?></p>
              <p>Jurusan: <?php echo $data['jurusan']; ?></p>
            </div>
          </div>
        <?php }
    } ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
