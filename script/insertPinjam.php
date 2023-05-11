<?php
require('./conn_db.php');

// Get form data
$memberId = $_POST['memberId'];
$idBuku = $_POST['idBuku'];

$nama = $conn_db->query("SELECT * FROM member WHERE id_member='$memberId'");
$nama = $nama->fetch_assoc();
$nama = $nama['nama'];

$judul = $_POST['judul'];
$tglPinjam = date('Y-m-d');
$btsPinjam = isset($_POST['bts_pinjam']) ? $_POST['bts_pinjam'] : null;

// Insert data into peminjaman table
$sql = "INSERT INTO peminjaman (id_member, id_buku, nama, judul, tgl_pinjam, bts_pinjam, pengembalian) VALUES ('$memberId', '$idBuku', '$nama', '$judul', '$tglPinjam', '$btsPinjam', false)";

if ($conn_db->query($sql) === TRUE) {
    header('Location: ../pinjam.php?id=' . $memberId . '&judul=' . $judul);
} else {
    echo "Error: " . $sql . "<br>" . $conn_db->error;
}

$conn_db->close();
exit;

?>
