<?php
// Include the database connection file
require('./conn_db.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    // Insert data into the 'member' table
    $sql = "INSERT INTO member (nama, email, no_telp) VALUES ('$nama', '$email', '$telepon')";
    $conn_db->query($sql);

    // Redirect to the member list page
    header("Location: ../member.php");
    exit;
} else {
    // Redirect back to the form page if form is not submitted
    header("Location: ../tambahMember.php");
    exit;
}
?>
