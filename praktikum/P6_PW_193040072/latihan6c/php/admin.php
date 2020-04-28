<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query
$makanan = query("SELECT * FROM makanan");
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
            background-color: white;
            margin: auto;
            text-align: center;
        }

        .color1 {
            background-color: yellow
        }

        .color2 {
            background-color: salmon;
        }

        .color3 {
            background-color: red;
        }

        .add {
            margin-left: 175px;
        }
    </style>
</head>
<body>
    <div class="add">
        <button><a href="tambah.php">Tambah Data</a></button>
    </div>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr class="color1">
            <th>#</th>
            <th>Opsi</th>
            <th>Gambar</th>
            <th>Nama Makanan</th>
            <th>Varian Rasa</th>
            <th>Exp</th>
            <th>Stok</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($makanan as $mkn) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button class="color2">Ubah</button></a>
                    <a href="hapus.php?id=<? $mkn['id'] ?>" onclick="return confirm('Hapus Data??')"><button class="color3">Hapus</button></a>
                </td>
                <td><img src ='../assets/img/<?= $mkn['img']; ?>'></td>
                <td><?= $mkn['nama_makanan']; ?></td>
                <td><?= $mkn['varian_rasa']; ?></td>
                <td><?= $mkn['exp']; ?></td>
                <td><?= $mkn['stok']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>