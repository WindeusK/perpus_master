<!DOCTYPE html>

<html>
    <head>
        <!-- Include Boostrap API -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="./style.css">
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perpus Master</title>
    </head>

    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand ms-2" href="./buku.php">
                        <img src="./img/arrow.png" class="arrowbtn">
                    </a>
                </div>
            </nav>

            <center>

            <form action="inputBuku.php" method="post">
                <div class="form-group">
                    <label for="inputJudul">Judul Buku: </label>
                    <input type="text" id="inputJudul" 
                            class="form-control formStyle" placeholder="Masukkan Judul Buku di sini..">
                </div>
            </form>

            </center>
        </div>
    </body>
</html>