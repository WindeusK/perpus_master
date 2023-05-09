<?php

function createTables() {
    require('../script/conn.php');
    if ($conn_db->connect_error) {
        die("Connection failed: " . $conn_db->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS perpus_master";
    $conn_db->query($sql);

    // Create member table
    $sql = "CREATE TABLE IF NOT EXISTS member (
        id_member INT(11) PRIMARY KEY AUTO_INCREMENT,
        nama VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        no_telp INT(11)
    )";
    $conn_db->query($sql);

    // Create buku table
    $sql = "CREATE TABLE IF NOT EXISTS buku (
        id_buku INT(11) PRIMARY KEY AUTO_INCREMENT,
        isbn INT(11),
        judul VARCHAR(255),
        genre VARCHAR(255),
        `desc` VARCHAR(255),
        umur VARCHAR(255)
    )";
    $conn_db->query($sql);

    // Create peminjaman table
    // Create peminjaman table with foreign key constraints
    $sql = "CREATE TABLE IF NOT EXISTS peminjaman (
        id_pinjam INT(11) PRIMARY KEY AUTO_INCREMENT,
        id_member INT(11),
        id_buku INT(11),
        nama VARCHAR(255),
        judul VARCHAR(255),
        tgl_pinjam DATE,
        bts_pinjam DATE,
        FOREIGN KEY (id_member) REFERENCES member(id_member),
        FOREIGN KEY (id_buku) REFERENCES buku(id_buku)
    )";
$conn_db->query($sql);

    $conn_db->query($sql);

    $conn_db->close();

    //success

    // Redirect the user to index.php upon successful completion
    header("Location: ../index.php");
    exit;
}

// Call the function
createTables();

// If the code execution reaches here, it means the script failed
// Notify the user and redirect them back to index.php
$message = "Setup Database gagal";
echo "<script>alert('$message'); window.location.href = '../index.php';</script>";
exit;
?>
