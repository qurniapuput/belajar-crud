<?php

include("../config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: http://localhost/belajar/user/index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<html>
    <head>
        <title>
            <?php echo $user['nama'] ?> | Toko Puput
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php include("../menu.php"); ?>

        <div class="container">
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Enter a valid email address
            </div>

            <div class="row">
                <div class="col-md-6">
                    <form action="updateuser.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" name="nama"required class="form-control" placeholder="Nama" value="<?php echo $user['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">email</label>
                            <input type="email" name="email" required class="form-control" placeholder="email" value="<?php echo $user['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">alamat</label>
                            <input type="text" name="alamat" required class="form-control" placeholder="alamat" value="<?php echo $user['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">password</label>
                            <input type="password" name="password" required class="form-control" placeholder="password" value="<?php echo $user['pass'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">.col-md-4</div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
</html>