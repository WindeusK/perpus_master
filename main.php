<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="text-center">
            <!-- Content -->
            <img src="https://smkn1tanjungpandan.sch.id/wp-content/uploads/2022/10/logo-smk-1-5.png" class="img-fluid rounded mainimg">
            <h1>Selamat Datang di <br><?=$settings->name; ?></h1>

            <a class="btn btn-outline-primary btn-lg mt-5 mainbtn" href="./buku.php">Buku</a>
            <br>
            <a class="btn btn-outline-primary btn-lg mt-4 mainbtn" href="./anggota.php">Anggota</a>
            <br>
            <a class="btn btn-outline-primary btn-lg mt-4 mb-5 mainbtn" href="./buku.php">Peminjaman</a>

            <br>
            <br>

            <h6 class="text-muted">Powered by Perpus Master</h6>

            <br>
            <br>
        </div>
    </div>
</body>
</html>
