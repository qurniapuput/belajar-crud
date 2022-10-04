<?php

include("../config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];


    // buat query update
    $sql = "UPDATE user SET nama='$nama', email='$email', alamat='$alamat', pass='$password' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: http://localhost/belajar/user/index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>