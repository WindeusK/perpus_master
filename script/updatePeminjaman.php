<?php
require('../script/conn_db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "UPDATE peminjaman SET pengembalian = true WHERE peminjaman.id_pinjam = '$id'";
    if ($conn_db->query($sql)) {
        header("Location: ../peminjaman.php");
    } else {
        echo "Error: " . $conn_db->error;
    }
}
?>
