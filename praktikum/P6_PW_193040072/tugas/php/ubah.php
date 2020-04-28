<?php  
require 'functions.php';

$id = $_GET['id'];
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];

if(isset($_POST['ubah'])) {
    if(ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah');
                documment.location.href = 'admin.php';
              </script>";
    } else {
         echo "<script>
                 alert('Data Gagal diubah');
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
    <title>Form Ubah Data Snack</title>
</head>
<body>
    <h3>Form Ubah Data Snack</h3>    
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $mkn['id']; ?>">       
        <ul>
            <li>
                <label for="img">Gambar :</label><br>
                <input type="text" name="img" id="img" required value="<?= $mkn['img']; ?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama Makanan :</label><br>
                <input type="text" name="nama_makanan" id="nama" required value="<?= $mkn['nama_makanan']; ?>"><br><br>
            </li>
            <li>
                <label for="rasa">Varian Rasa :</label><br>
                <input type="text" name="varian_rasa" id="rasa" required value="<?= $mkn['varian_rasa']; ?>"><br><br>
            </li>
            <li>
                <label for="exp">Exp :</label><br>
                <input type="text" name="kadaluarsa" id="exp" required value="<?= $mkn['kadaluarsa']; ?>"><br><br>
            </li>
            <li>
                <label for="stok">Stok :</label><br>
                <input type="text" name="stok" id="stok" required value="<?= $mkn['stok']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>