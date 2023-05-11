<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./buku.php">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./member.php">Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./peminjaman.php">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambahBuku.php">Tambah Buku</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h1>Daftar Buku</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Genre</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fetch data from the database and populate the table rows dynamically -->
                <?php
                // Include the database connection file
                require('./script/conn_db.php');

                // Fetch data from the 'buku' table
                $sql = "SELECT * FROM buku";
                $result = $conn_db->query($sql);

                // Loop through the rows and display the data
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id_buku'] . "</td>";
                        echo "<td>" . $row['isbn'] . "</td>";
                        echo "<td>" . $row['judul'] . "</td>";
                        echo "<td>" . $row['genre'] . "</td>";
                        echo "<td>" . $row['desc'] . "</td>";
                        echo "<td>";
                        echo "<a href='editBuku.php?id=" . $row['id_buku'] . "' class='btn btn-primary'>Edit</a>";
                        echo " ";
                        echo "<a href='./pinjam.php?id=" . $row['id_buku'] . "&judul=" . $row['judul'] . "' class='btn btn-success'>Pinjam</a>";
                        echo "<br>";
                        echo "<a href='./script/deleteBuku.php?id=" . $row['id_buku'] . "' class='btn btn-danger mt-1'>Hapus Member</a>";  // Updated line
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data found.</td></tr>";
                }                
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
