<?php include("config.php"); ?>
<html>
    <head>
        <title>
            product list
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php include("menu.php"); ?>
        
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM product";
                        $query = mysqli_query($db, $sql);

                        while($produk = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $produk['id'] ?></td>
                            <td><?php echo $produk['name'] ?></td>
                            <td><?php echo $produk['description'] ?></td>
                            <td><?php echo $produk['price'] ?></td>
                            <td>
                                <a href='delete-product.php?id=<?php echo $produk['id']?>'>Hapus</a>
                                <a href='edit-product.php?id=<?php echo $produk['id']?>'>Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Enter a valid email address
            </div>

            <div class="row">
                <div class="col-md-6">
                    <form action="save-product.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Price" required>
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

            <div class="row">
                <?php
                    $sql = "SELECT * FROM product";
                    $query = mysqli_query($db, $sql);

                    while($produk = mysqli_fetch_array($query)){
                ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                        <img src="img/2.png" alt="...">
                        <div class="caption">
                            <h3><?php echo $produk['name'] ?></h3>
                            <a><?php echo $produk['price'] ?></a>
                            <p><?php echo $produk['description'] ?></p>
                            <p>
                                <a href="delete-product.php?id=<?php echo $produk['id']?>" class="btn btn-danger" role="button">Delete</a>
                                <a href="edit-product.php?id=<?php echo $produk['id']?>" class="btn btn-primary" role="button">Edit</a>
                            </p>
                        </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
</html>