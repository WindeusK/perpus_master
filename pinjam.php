<?php

$id = "";
$judul = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];    
} else {echo "ID tidak valid"; exit;}

if (isset($_GET['judul'])) {
    $judul = $_GET['judul'];
} else {echo "Judul tidak valid"; exit;}
require('./script/conn_db.php');
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
<div class="container">
    <h1 class="text-center">Pinjam Buku <?= $judul ?></h1>
    
    <form action="./script/insertPinjam.php" method="POST">
        <div class="form-group">
            <label for="member">Member:</label>
            <select class="form-control" id="member" name="member">
                <option value="">Select Member</option>
                <?php
                $sql = "SELECT * FROM member";
                $result = $conn_db->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $memberId = $row['id'];
                        $nama = $row['nama'];
                        echo "<option value='$memberId'>$nama</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Pengembalian:</label>
            <input type="date" class="form-control" id="date" name="bts_pinjam">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
</body>

</html>