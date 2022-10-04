<?php

include("../config.php");
// cek apakah tombol submit sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];

    // buat query
    $sql = "INSERT INTO user (nama, email, alamat, pass) VALUE ('$nama', '$email', '$alamat', '$password')";
    $query = mysqli_query($db, $sql);

    // var_dump($sql);
    // die();

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: http://localhost/belajar/user/index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: http://localhost/belajar/user/index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>