<?php 
// Mengecek apakah ada id yang di kirimkan
// Jika tidak maka akan di kembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location:../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yangdi ambil dari url
$makanan = query("SELECT * FROM makanan WHERE id = $id") [0];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src ='../assets/img/<?= $makanan['img']; ?>'>
        </div>
        <div class="keterangan">
            <p><?= $makanan["nama_makanan"]; ?></p>
            <p><?= $makanan["varian_rasa"]; ?></p>
            <p><?= $makanan["exp"]; ?></p>
            <p><?= $makanan["stok"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>
 