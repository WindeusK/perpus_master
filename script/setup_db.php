<?php

function createTables() {
    require('../script/conn.php');
    $sql = "CREATE DATABASE IF NOT EXISTS perpus_master";
    $conn->query($sql);

    require('../script/conn_db.php');
    if ($conn_db->connect_error) {
        die("Connection failed: " . $conn_db->connect_error);
    }

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
        isbn VARCHAR(255),
        judul VARCHAR(255) NOT NULL,
        genre VARCHAR(255) NOT NULL,
        `desc` VARCHAR(255) NOT NULL
    )";
    $conn_db->query($sql);

    // Create peminjaman table
    // Create peminjaman table with foreign key constraints
    $sql = "CREATE TABLE IF NOT EXISTS peminjaman (
        id_pinjam INT(11) PRIMARY KEY AUTO_INCREMENT,
        id_member INT(11) NOT NULL,
        id_buku INT(11) NOT NULL,
        nama VARCHAR(255) NOT NULL,
        judul VARCHAR(255) NOT NULL,
        tgl_pinjam DATE NOT NULL,
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
