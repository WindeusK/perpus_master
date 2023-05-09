<?php
// Include the database connection file
require('../conn_db.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $desc = $_POST['desc'];

    // Insert data into the 'buku' table
    $sql = "INSERT INTO buku (isbn, judul, genre, `desc`) VALUES ('$isbn', '$judul', '$genre', '$desc')";
    if ($conn_db->query($sql) === TRUE) {
        // Redirect to tambahBuku.php upon successful insertion
        header("Location: tambahBuku.php");
        exit;
    } else {
        // Display error message
        echo "Error: " . $sql . "<br>" . $conn_db->error;
    }
}

// Close the database connection
$conn_db->close();
?>
