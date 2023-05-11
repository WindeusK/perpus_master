<?php
// Include the database connection file
require('../script/conn_db.php');

// Check if the 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    // Retrieve the 'id' parameter
    $id = $_GET['id'];

    // Delete the row from the 'member' table
    $sql = "DELETE FROM member WHERE id_member = $id";
    $result = $conn_db->query($sql);

    // Check if the deletion was successful
    if ($result) {
        // Redirect the user back to member.php
        header('Location: ../member.php');
        exit;
    } else {
        // Display an error message if the deletion failed
        echo "Error deleting record: " . $conn_db->error;
    }
} else {
    // Redirect the user back to member.php if 'id' parameter is not provided
    header('Location: member.php');
    exit;
}
?>
