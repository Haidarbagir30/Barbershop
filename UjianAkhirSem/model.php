<?php
require "fungsi.php";

$model= query("SELECT * FROM data_model_potong")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stiyle2.css">
    <title>Document</title>
</head>
<body>
    <div class="header-area">
        <div class="brand"> 
        <a href="index.php"><img class="logo" src="img/barbershop.png" ></a>
        </div>
        <nav>
        <ul>
            <li><a href="index.php"              >Home</a></li>
            <li><a href="model.php" class="aktif">Model</a></li>
            <li><a href="about.php"              >About</a></li>
            <li><a href="login.php"              >Just Admin</a></li>
        </ul>
        </nav>
    </div>
    <div class="content">
        <img class="sw" src="img/Group 32.png" width="100%">
    </div>
    <div class="wrapper">
        <div>
            <h2> Menu </h2>
        </div>
        <!-- Menjadi Perulangan -->
        <?php foreach($model as $m):?>
        <div class="waw">
            <a href="profil.php?id=<?= $m["id"];?>">
                <img src="img/<?= $m["gambar"]?>" width="200px">
            </a>
            <p><?= $m["model"]?> <br> <?= $m["harga"]?></p>
        </div>
        <?php endforeach; ?>
        <!-- Selesai Perulangan -->
   </div>
   <script>
    function Keluar() {
        alert('Terimakasih Sudah berlangganan');
    }
    </script>
</body>
<footer>
    <div id="colom">
        <p> Tentang kami, bisa di cek langsung di bawah ini, dan segera untuk memesan...</p>
        <br>
        <ul>
            <li>---<a href="https://m.facebook.com/home.php"><img class="a1" src="img/fb.png" width="50px"></a></li>
            <li><a href="https://twitter.com/twitter"><img class="a2" src="img/Tweeter.png" width="50px"></a></li>
            <li><a href="https://drive.google.com/drive/u/0/my-drive"><img class="a3" src="img/google.png" width="50px"></a></li>
            <li><a href="https://www.instagram.com/accounts/login/"><img class="a4" src="img/ig.png" width="50px"></a>---</li>
        </ul>
    </div>
</footer>

<script>
    function Keluar() {
        alert('sebelum memilih, register terlebih dahulu');
    }
</script>
</html>