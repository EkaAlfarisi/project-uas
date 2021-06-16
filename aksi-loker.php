<?php
session_start();
if (isset($_POST['pendidikan']) && isset($_POST['posisi'])) {
    include('koneksi.php');

    $id = $_SESSION['id'];
    $pos = $_POST['posisi'];
    $pend = $_POST['pendidikan'];

//ini coment
    $loker = $mysqli->query("INSERT INTO loker VALUES(null, '$id', '$pos', '$pend');") or die($mysqli->connect_error);
    if ($loker) {
        echo "DATA LOKER BERHASIL DITAMBAHKAN";
        echo "<a class='btn blue' href='posting-loker.php'>Kembali</a>";
    } else {
        echo "GAGAL MENAMBAHKAN DATA";
        echo "<a class='btn blue' href='posting-loker.php'>Kembali</a>";
    }
} else {
    echo "Isikan Semua Data";
    echo "<a class='btn blue' href='posting-loker.php'>Kembali</a>";
}
?>
