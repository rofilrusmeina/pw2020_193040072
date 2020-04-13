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
        }
    </style>
</head>
<body>
   <div class="container">
    <table border = "1px"; cellpadding = 10; cellspacing= "1"> 
         <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama Makanan</th>
            <th>Varian Rasa</th>
            <th>Exp</th>
            <th>Stok</th>
        </tr>
            
        <?php $i = 1?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            
                <tr>
                    <td><?= $i ?></td>
                    <td><img src ='../latihan5a/assets/img/<?= $row["img"]; ?>'></td>
                    <td><?= $row ["nama_makanan"] ?></td>
                    <td><?= $row ["varian_rasa"] ?></td>
                    <td><?= $row ["exp"] ?></td>
                    <td><?= $row ["stok"] ?></td>
                </tr> 
            <?php $i++ ?>
        <?php endwhile; ?>
     </table>
     </div>
</body>
</html> 