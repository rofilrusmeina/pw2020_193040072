<?php 
// function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040072") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sqL){
    $conn = koneksi();
    $result = mysqli_query($conn , "$sqL");

    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambabhkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama_makanan']);
    $rasa = htmlspecialchars($data['varian_rasa']);
    $exp = htmlspecialchars($data['kadaluarsa']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO makanan
                    VALUES
                    ('', '$img', '$nama', '$rasa', '$exp', '$stok')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>