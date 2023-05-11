<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Peminjaman</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
    </nav>
    <div class="container-fluid">
        <h1 class="text-center">Daftar Peminjaman</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Member</th>
                    <th>ID Buku</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Tanggal Pinjam</th>
                    <th>Batas Pinjam</th>
                    <th>Pengembalian</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fetch data from the database and populate the table rows dynamically -->
                <?php
                // Include the database connection file
                require('./script/conn_db.php');

                // Fetch data from the 'peminjaman' table
                $sql = "SELECT * FROM peminjaman";
                $result = $conn_db->query($sql);

                // Loop through the rows and display the data
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id_pinjam'] . "</td>";
                        echo "<td>" . $row['id_member'] . "</td>";
                        echo "<td>" . $row['id_buku'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['judul'] . "</td>";
                        echo "<td>" . $row['tgl_pinjam'] . "</td>";
                        echo "<td>" . $row['bts_pinjam'] . "</td>";
                        echo "<td>";
                        if ($row['pengembalian']) {
                            echo "Sudah Dikembalikan";
                        } else {
                            echo "Sudah Dikemablikan";
                        }
                        echo "</td>";
                        echo "<td>";
                        echo "<a href='./script/deletePeminjaman.php?id=" . $row['id_pinjam'] . "' class='btn btn-danger'>Delete</a>";
                        echo "<br>";
                        echo "<a href='./script/updatePeminjaman.php?id=" . $row['id_pinjam'] . "' class='btn btn-primary mt-1'>Kembalikan</a>";
                        echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No data found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
