<?php 
    $a = [
        [
            "no" => "1",
            "nama" =>"Nabati",
            "rasa" =>"Keju, Cokelat, Vanilla, Ice Cream",
            "stok" => "73",
            "gambar" => "makanan1.jpg"
        ],
        [
            "no" => "2",
            "nama" =>"Qtela",
            "rasa" =>"Original, Balado, BBQ",
            "stok" => "90",
            "gambar" => "makanan2.jpg"
        ],
        [
            "no" => "3",
            "nama" =>"Cheetos",
            "rasa" =>"Jagung Bakar, Keju",
            "stok" => "120",
            "gambar" => "makanan3.jpg"
        ],
        [
            "no" => "4",
            "nama" =>"Malkist Roma",
            "rasa" =>"Abon, Keju, Original",
            "stok" => "40",
            "gambar" => "makanan4.jpg"
        ],
        [
            "no" => "5",
            "nama" =>"Taro",
            "rasa" =>"Original, Rumput Laut, Mix, BBQ",
            "stok" => "70",
            "gambar" => "makanan5.jpg"
        ],
        [
            "no" => "6",
            "nama" =>"Kacang Kupas Garuda",
            "rasa" =>"Original",
            "stok" => "80",
            "gambar" => "makanan6.jpg"
        ],
        [
            "no" => "7",
            "nama" => "Pillow",
            "rasa" =>"Cokelat, talas",
            "stok" => "55",
            "gambar" => "makanan7.jpg"
        ],
        [
            "no" => "8",
            "nama" => "Kacang Telur Garuda",
            "rasa" =>"Original",
            "stok" => "75",
            "gambar" => "makanan8.jpg"
        ],
        [
            "no" => "9",
            "nama" => "Kripik Maicih",
            "rasa" =>"Pedas Dengan Level",
            "stok" => "45",
            "gambar" => "makanan9.jpg"
        ],
        [
            "no" => "10",
            "nama" => "HappyTos",
            "rasa" =>"Jagung Bakaar",
            "stok" => "50",
            "gambar" => "makanan10.jpg"
        ]
    ]
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
    <table border = "1px"; cellpadding = 10; cellspacing= "1"> 
         <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama Makanan</th>
            <th>Varian Rasa</th>
            <th>Stok</th>
        </tr>
            
        <?php
            foreach ($a as $nama){
            
                echo"
                <tr>
                    <td>$nama[no]</td>
                    <td><img src ='../latihan5a/assets/img/$nama[gambar]'></td>
                    <td> $nama[nama] </td>
                    <td> $nama[rasa] </td>
                    <td> $nama[stok] </td>
                </tr>"; 
                } 
        ?>
     </table>
</body>
</html> 