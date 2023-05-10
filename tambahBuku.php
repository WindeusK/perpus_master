<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Buku</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="buku.php">Buku List</a>
            <a class="navbar-brand" href="tambahBuku.php">Tambah</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h1>Tambah Buku</h1>
        <form method="POST" action="./script/insertBuku.php">
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN (optional)</label>
                <input type="text" class="form-control" id="isbn" name="isbn">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select class="form-select" id="genre" name="genre" required>
                    <option value="" selected disabled>Pilih Genre</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Romansa">Romansa</option>
                    <option value="Horor">Horor</option>
                    <option value="Misteri">Misteri</option>
                    <option value="Drama">Drama</option>
                    <option value="Biografi">Biografi</option>
                    <option value="Sejarah">Sejarah</option>
                    <option value="Klasik">Klasik</option>
                    <option value="Fantasi">Fantasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

</html>
