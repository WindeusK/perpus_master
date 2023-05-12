<?php
// Include the database connection file
require('./script/conn_db.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $desc = $_POST['desc'];

    // Update data in the 'buku' table
    $sql = "UPDATE buku SET isbn='$isbn', judul='$judul', genre='$genre', `desc`='$desc' WHERE id_buku=$id";
    $conn_db->query($sql);

    // Redirect to the book list page
    header("Location: ./buku.php");
}

// Get book data from the database
$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE id_buku=$id";
$result = $conn_db->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="buku.php">Buku List</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h1>Edit Buku</h1>
        <form method="POST" action="./editBuku.php">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id_buku']; ?>">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $row['isbn']; ?>">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row['judul']; ?>">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" id="genre" name="genre">
                    <option value="" selected disabled>Pilih Genre</option>
                    <option value="Fiksi" <?php if ($row['genre'] == 'Fiksi') echo 'selected'; ?>>Fiksi</option>
                    <option value="Non-Fiksi" <?php if ($row['genre'] == 'Non-Fiksi') echo 'selected'; ?>>Non-Fiksi</option>
                    <option value="Romansa" <?php if ($row['genre'] == 'Romansa') echo 'selected'; ?>>Romansa</option>
                    <option value="Horor" <?php if ($row['genre'] == 'Horor') echo 'selected'; ?>>Horor</option>
                    <option value="Misteri" <?php if ($row['genre'] == 'Misteri') echo 'selected'; ?>>Misteri</option>
                    <option value="Drama" <?php if ($row['genre'] == 'Drama') echo 'selected'; ?>>Drama</option>
                    <option value="Biografi" <?php if ($row['genre'] == 'Biografi') echo 'selected'; ?>>Biografi</option>
                    <option value="Sejarah" <?php if ($row['genre'] == 'Sejarah') echo 'selected'; ?>>Sejarah</option>
                    <option value="Klasik" <?php if ($row['genre'] == 'Klasik') echo 'selected'; ?>>Klasik</option>
                    <option value="Fantasi" <?php if ($row['genre'] == 'Fantasi') echo 'selected'; ?>>Fantasi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"><?php echo $row['desc']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>