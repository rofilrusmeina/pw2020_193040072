<?php  
require 'functions.php';

if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                documment.location.href = 'admin.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
              </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Tambah Data Snack</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="img">Gambar :</label><br>
                <input type="text" name="img" name="img" id="img" required><br><br>
            </li>
            <li>
                <label for="nama">Nama Makanan :</label><br>
                <input type="text" name="nama_makanan" id="nama" required><br><br>
            </li>
            <li>
                <label for="rasa">Varian Rasa :</label><br>
                <input type="text" name="varian_rasa" id="rasa" required><br><br>
            </li>
            <li>
                <label for="exp">Exp :</label><br>
                <input type="text" name="kadaluarsa" id="exp" required><br><br>
            </li>
            <li>
                <label for="stok">Stok :</label><br>
                <input type="text" name="stok" id="stok" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>