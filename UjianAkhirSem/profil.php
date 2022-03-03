<?php
require "fungsi.php";

$id= $_GET["id"];
$model= query("SELECT * FROM data_model_potong WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

    // ek apakah data  berhasil di tambahkan / tidak
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stiyle2.css">
    <title>Pilihan Menu</title>
</head>
<body>
<table class="table" width="100%" cellpadding="15" cellspacing="0">
        <tr>
            <td class="table1">
                <p class="text1"> <b>Barber</b>shop </p>
            </td>
            <td class="table2">
                <a href="model.php"><img src="img/door.png" class="gambar" width="20px"></a>
            </td>				
        </tr>
        <tr>
            <td class="table3">
                <ul>
                    <li><a  class="aktif" href="profil.php">Pesan</a></li>
                    <li><a href="admin.php">Anntri</a></li>
                    <li><a href="saran.php">Saran</a></li>
                </ul>
            </td>
            <td class="table4">
            <input type="hidden" name="ID" value="<?= $model["id"]?>">
            <img src="img/<?=$model["gambar"];?>" class="models" width="200px">

            <!-- Ini buat biar misal tidak ada model yang di pilih maka akan di arahkan ke model.php -->
            <?php
            if(!isset($model["gambar"])){
                header("Location:model.php");
                exit;
            }
            ?>
            <!-- Penutup -->

            <h1>Registration Forms</h1>
                <form action="" method="post">

                    <ul>
                        <li>
                            <label for="nama">nama :</label> <br>
                            <input type="text" name="nama" id="nama" size="30"
                            required>
                        </li>
                        <li>
                            <label for="whatsapp">no hp :</label> <br>
                            <input type="text" name="whatsapp" id="whatsapp" size="30"
                            required>
                        </li>

                        <!-- nambah model dan harga -->
                        <li>
                            <label for="model">Model :</label> <br>
                            <input type="text" name="Model" id="Model" size="30"
                            required value="<?= $model["model"]?>">
                        </li>
                        <li>
                            <label for="harga">Harga :</label> <br>
                            <input type="text" name="Harga" id="Harga" size="30"
                            required value="Rp. <?= $model["harga"]?>">
                        </li>
                        <li>
                            <label for="gambar">Gambar :</label> <br>
                            <input type="text" name="gambar" id="gambar" size="30"
                            required value="<?= $model["gambar"]?>">
                        </li>
                        <!-- Selesai Nambah model dan harga -->

                        <li>
                            <button class="btn" type="submit" name="submit">
                                <b>Pesan</b>
                            </button>
                        </li>
                    </ul>

                    
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
