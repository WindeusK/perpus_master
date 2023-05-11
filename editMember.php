<?php
// Include the database connection file
require('./script/conn_db.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $no_telp = $_POST['nomor_telepon'];

    // Update data in the 'member' table
    $sql = "UPDATE member SET nama='$nama', email='$email', no_telp='$no_telp' WHERE id_member=$id";
    $conn_db->query($sql);

    // Redirect to the member list page
    header("Location: editMember.php?id=$id");
    exit;
}

// Get member data from the database
$id = $_GET['id'];
$sql = "SELECT * FROM member WHERE id_member=$id";
$result = $conn_db->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Member</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="member.php">Member List</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h1>Edit Member</h1>
        <form method="POST" action="./editMember.php">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id_member']; ?>">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $row['no_telp']; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
