<?php

include("config.php");

// cek apakah tombol submit sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // buat query
    $sql = "INSERT INTO product (name, description, price) VALUE ('$name', '$description', '$price')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: product.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: product.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>