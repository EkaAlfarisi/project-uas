<?php
if(isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['no_telp']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['akses']))
{
    include('koneksi.php');

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $akses = $_POST['akses'];
//ini coment
    $input = $mysqli->query("INSERT INTO pengguna VALUES(NULL, '$nama','$alamat','$no_telp',null,null,null,null,'$user','$pass','$akses')") or die($mysqli->connect_error);

    if($input){
        echo "Registrasi berhasil. Silahkan login";
        echo "<a class='btn blue' href='index.php'>Login</a>";
    }
    else{
        echo "GAGAL MENAMBAHKAN DATA";
        echo "<a class='btn blue' href='index.php'>Kembali</a>";
    }
}
else
{
    echo "Isikan Semua Data";
    echo "<a class='btn blue' href='register.php'>Kembali</a>";
}
?>
