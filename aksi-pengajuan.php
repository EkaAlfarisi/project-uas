<?php
session_start();
if (isset($_POST['tanggal_lahir']) && isset($_POST['pendidikan']) && isset($_POST['jurusan']) && isset($_POST['lembaga_pendidikan'])) {
    include('koneksi.php');

    $id = $_SESSION['id'];
    $tgl = $_POST['tanggal_lahir'];
    $pend = $_POST['pendidikan'];
    $jur = $_POST['jurusan'];
    $lemb = $_POST['lembaga_pendidikan'];
//ini coment
    $input = $mysqli->query("UPDATE pengguna SET tanggal_lahir='$tgl', pendidikan='$pend', jurusan='$jur', nama_lembaga_pendidikan='$lemb' WHERE id_pengguna='$id';") or die($mysqli->connect_error);
    $pengajuan = $mysqli->query("INSERT INTO pengajuan VALUES(null, '$id');;") or die($mysqli->connect_error);
    if ($input) {
        echo "DATA PENGAJUAN BERHASIL DITAMBAHKAN";
        echo "<a class='btn blue' href='pengajuan.php'>Kembali</a>";
    } else {
        echo "GAGAL MENAMBAHKAN DATA";
        echo "<a class='btn blue' href='pengajuan.php'>Kembali</a>";
    }
} else {
    echo "Isikan Semua Data";
    echo "<a class='btn blue' href='pengajuan.php'>Kembali</a>";
}
?>
