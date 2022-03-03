<?php 
// riquire&include ialah jembatan penyambung antar 1 dengan yang lain
require 'fungsi.php';
$pelanggan = query("SELECT * FROM pelanggan");

// Apabila tombol cari ditekan
if(isset($_POST["cari"])) {
    $pelanggan = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stiyle2.css">
    <title>Halaman Admin</title>
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
                    <li><a href="profil.php">Pesan</a></li>
                    <li><a class="aktif" href="admin.php">Anntri</a></li>
                    <li><a href="saran.php">Saran</a></li>
                </ul>
            </td>
            <td class="table4">
            <h1> Daftar Pelanggan <br> Barbershop</h1>
                <br><br>

                <form action="" method="post">
                    <!-- autofakus buat tulisan auto, autokomplit buat ente habis nyari pasti ada historynya -->
                    <input type="text" name="keyword" size="50" autofocus 
                    placeholder="Masukkan data yang kalian cari..." autocomplete="off">
                    <button class="btn" type="submit" name="cari">Cari!</button>
                </form>

                <br>
                <table class="data" border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Model</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>nama model</th>
                        <th>harga</th>
                    </tr>
                    <!-- tulisanya yang ( $no = 1;) harus diatas while biar kebaca
                        kalo (img/(?=) jangan sampe ada spasi, nanti gak kebaca -->
                    <?php $no = 1; ?> 
                    <?php foreach( $pelanggan as $mhs ) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td>
                            
                            <a href=" hapus.php?id=<?= $mhs["id"]; ?> " onclick="return confirm(' apakah anda yakin'); ">hapus </a>
                        </td>
                        <td>
                            <img src="img/<?= $mhs["gambar"]; ?> " width="50">
                        </td>
                        <td> <?= $mhs["nama"]; ?></td>
                        <td> <?= $mhs["whatsapp"]; ?></td>
                        <td> <?= $mhs["model"]; ?></td>
                        <td> <?= $mhs["harga"]; ?></td>
                    </tr> 
                    <?php $no++; ?> 
                    <?php endforeach; ?>  
                </table>
            </td>
        </tr>
    </table>
</body>
</html>