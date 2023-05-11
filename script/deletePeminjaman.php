<?php
// Include the database connection file
require('../script/conn_db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the peminjaman record from the database
    $sql = "DELETE FROM peminjaman WHERE id_pinjam = '$id'";
    if ($conn_db->query($sql)) {
        echo "Peminjaman Berhasil dihapus";
    } else {
        echo "Error: " . $conn_db->error;
    }
} else {
    echo "Invalid ID";
}

// Redirect back to the peminjaman.php page
header("Location: ../peminjaman.php");
exit();
?>