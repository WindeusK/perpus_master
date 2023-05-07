<!DOCTYPE HTML>

<html>
    <head>
        <!-- Include Boostrap API -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="./style.css">
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perpus Master</title>
    </head>

    <body>
        <!-- Container Bootstrap -->
        <div class="container-fluid">
            <?php require('./script/db_setup.php'); ?>
            <center>
            <!-- Content -->
            
            <img src="https://smkn1tanjungpandan.sch.id/wp-content/uploads/2022/10/logo-smk-1-5.png" class="img-fluid rounded">
            <h1>Selamat Datang di <br><?=$settings->name; ?></h1>

            <a class ="btn btn-outline-primary btn-lg mt-5" href="./buku.php">
                Buku
            </a>
            <br>
            <a class ="btn btn-outline-primary btn-lg mt-4" href="./anggota.php">
                Anggota
            </a>
            <br>
            <a class ="btn btn-outline-primary btn-lg mt-4" href="./buku.php">
                Peminjaman
            </a>
            </center>
        </div>
    </body>
</html>