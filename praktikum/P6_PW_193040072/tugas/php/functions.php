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

    $rows = [];
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

// fungsi untuk mengahapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama_makanan']);
    $rasa = htmlspecialchars($data['varian_rasa']);
    $exp = htmlspecialchars($data['kadaluarsa']);
    $stok = htmlspecialchars($data['stok']);

    $query = "UPDATE makanan SET
    img = '$img',
    nama_makanan = '$nama',
    varian_rasa = '$rasa',
    kadaluarsa = '$exp',
    stok = '$stok'
    WHERE id = '$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>