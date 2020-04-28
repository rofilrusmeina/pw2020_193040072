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
    <style>
        body {
            background-color: #aeaeae;
        }
        table {
            text-align: center;
            margin: auto;
            background-color: white;
        }
        button.tombol-kembali {
            position: relative;
            margin: auto;
        }
        td {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="container">
    <table border="1px solid black">
        <tr>
        <td><div class="gambar">
            <img src ='../assets/img/<?= $makanan['img']; ?>'>
        </div></td>
        </tr>
        <div class="keterangan">
            <tr>
            <td><p><?= $makanan["nama_makanan"]; ?></p></td>
            </tr>
            <tr>
            <td><p><?= $makanan["varian_rasa"]; ?></p></td>
            </tr>
            <tr>
            <td><p><?= $makanan["exp"]; ?></p></td>
            </tr>
            <tr>
            <td><p><?= $makanan["stok"]; ?></p></td>
            </tr>
            
            </table>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>
 