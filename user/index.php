<?php include("../config.php"); ?>
<html>
    <head>
        <title>
            user list
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php include("../menu.php"); ?>
        
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM user";
                        $query = mysqli_query($db, $sql);

                        while($user = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['nama'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['alamat'] ?></td>
                            <td>
                                <a href='deleteuser.php?id=<?php echo $user['id']?>'>Hapus</a>
                                <a href='edituser.php?id=<?php echo $user['id']?>'>Edit</a>
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
                    <form action="saveuser.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">email</label>
                            <input type="email" name="email" class="form-control" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">password</label>
                            <input type="password" name="password" class="form-control" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                        <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">.col-md-4</div>
            </div>

            <div class="row">
                <?php
                    $sql = "SELECT * FROM user";
                    $query = mysqli_query($db, $sql);

                    while($user = mysqli_fetch_array($query)){
                ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                        <img src="../1.png" alt="...">
                        <div class="caption">
                            <h3><?php echo $user['nama'] ?></h3>
                            <a><?php echo $user['email'] ?></a>
                            <p><?php echo $user['alamat'] ?></p>
                            <p>
                                <a href="deleteuser.php?id=<?php echo $user['id']?>" class="btn btn-danger" role="button">Delete</a>
                                <a href="edituser.php?id=<?php echo $user['id']?>" class="btn btn-primary" role="button">Edit</a>
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