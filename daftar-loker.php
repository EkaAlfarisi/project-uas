<?php session_start();

include('koneksi.php');
$d = $mysqli->query("SELECT l.posisi, l.pendidikan, p.nama, p.alamat, p.no_telpon FROM loker l JOIN perusahaan p ON l.id_perusahaan = p.id_perusahaan;"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAFTAR LOWONGAN KERJA</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
  <h3>DAFTAR LOWONGAN KERJA</h3>
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
              <span class="card-title">Perusahaan <?php echo $data['nama']; ?></span>
              <p>Alamat: <?php echo $data['alamat']; ?></p>
              <p>No Telp: <?php echo $data['no_telpon']; ?></p>
              <p>Jabatan Yang Dibutuhkan: <?php echo $data['posisi']; ?></p>
              <p>Minimal Pendidikan: <?php echo $data['pendidikan']; ?></p>
            </div>
          </div>
        <?php }
    } ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
