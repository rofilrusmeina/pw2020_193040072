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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height:250px;
            padding: 20px;
        }
        body {
            text-align: center;
            background-color: #aeaeae;
        }
        a {
            color: blue;
        }
    </style>
</head>
<body>
     <div class="container">
        <?php foreach ($makanan as $mkn) : ?>
            <p>
                <a href="php/detail.php?id=<?= $mkn ['id']?>">
                    <?= $mkn["nama_makanan"] ?>
                </a>
            </p>
        <?php endforeach; ?>
     </div>
</body>
</html> 