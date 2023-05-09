<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Perpus Master</title>

    <!-- External Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand ms-2" href="./buku.php">
                    <img src="./img/arrow.png" class="arrowbtn" alt="Arrow Icon">
                </a>
            </div>
        </nav>

        <form action="inputBuku.php" method="post" class="formstyle">
            <div class="form-group">
                <label for="inputJudul">Judul Buku:</label>
                <input type="text" id="inputJudul" class="form-control" placeholder="Masukkan Judul Buku di sini..">
            </div>
            
            <div class="form-group">
                <label for="inputISBN">ISBN:</label>
                <input type="text" id="inputISBN" class="form-control" placeholder="Masukkan ISBN di sini.." name="isbn">
            </div>
            
            <div class="form-group">
                <label for="inputGenre">Genre:</label>
                <select id="inputGenre" class="form-control" name="genre">
                    <option value="fiksi">Fiksi</option>
                    <option value="non-fiksi">Non-Fiksi</option>
                    <option value="misteri">Misteri</option>
                    <option value="romansa">Romansa</option>
                    <option value="fantasi">Fantasi</option>
                    <option value="fiksi-ilmiah">Fiksi Ilmiah</option>
                    <option value="thriller">Thriller</option>
                    <option value="horor">Horor</option>
                    <option value="biografi">Biografi</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
