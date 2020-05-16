<?php 
    // Melakukan Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");

    // Memilih databse
    mysqli_select_db($conn, "tubes_193040072") or die("database salah");

    // query mengambil objek dari tabel di dalam database
    $result = mysqli_query($conn, "SELECT * FROM makanan");

    // menghubungkandengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $makanan = query("SELECT * FROM makanan");

    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $makanan = query("SELECT * FROM makanan WHERE
                    nama_makanan LIKE '%$keyword%' OR
                    varian_rasa LIKE '%$keyword%' OR
                    kadaluarsa LIKE '%$keyword%' OR
                    stok LIKE '%$keyword%' ");
    } else {
        $makanan = query("SELECT * FROM makanan");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">Grosir Online</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon"><img src="aset/img/togle.png"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="php/login.php"><h4>Login</h4></a>
          <form class="form-inline" action="" method="GET" class="add">
            <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari">Search</button>
          </form>
        </div>
      </div>
      </div>
    </nav>
    <div class="container-fluid">
            <div class="row">
                <?php foreach ($makanan as $mkn) : ?>
                    <div class="col-md-4">
                        <p class="nama">
                            <div class="card mt-3  mb-4 ml-5" style="width: 18rem;">
                                <img class="card img-fluid max-foto" src="assets/img/<?= $mkn['img']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $mkn['nama_makanan']; ?></h5>
                                    <a href="php/detail.php?id=<?= $mkn['id']; ?>" class="btn btn-primary">Detail</a>
                                </div>
                            </div>

                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
   <br>
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>