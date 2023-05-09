<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $judul = $_POST["judul"];
    $isbn = $_POST["isbn"];
    $genre = $_POST["genre"];
    $deskripsi = $_POST["deskripsi"];

    require("./script/conn.php");

    $query = "INSERT INTO buku (isbn, judul, genre, desc) VALUES (" .
        $judul .
        $isbn .
        $genre .
        $deskripsi .
    ")";

    $conn_db->query($query);
}
?>
