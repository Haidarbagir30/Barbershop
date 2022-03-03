<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="stiyle.css">
</head>
<body>
<div class="header-area">
        <div class="brand"> 
        <a href="index.php"><img class="logo" src="img/barbershop.png" ></a>
        </div>
        <nav>
        <ul>
            <li><a href="index.php"              >Home</a></li>
            <li><a href="model.php"              >Model</a></li>
            <li><a href="about.php" class="aktif">About</a></li>
            <li><a href="login.php"              >Just Admin</a></li>
        </ul>
        </nav>
    </div>
    <div id="jumbotron2">
        <div id="tujuan"></div>
        <div class="visii"><h1 class="visi1">Keterangan</h1></div>
        <div id="do"><p id="doo"> lokasi Barbershop : 
            Jl. Raya Siman No.Km. 6, Dusun I, Siman, <br>Kecamatan : Siman, 
            <br>Kabupaten : Ponorogo, <br>Provinsi : Jawa Timur 63471,<br> no Telepon : (0352) 483762, 
            <br>Wilayah Kampus : Perdesaan
        </p></div>
        <div id="hb" data-0-top="opacity:0;right:0px;" data-120top="opacity:1;right:100px;">
            <button type="button" class="ij" onclick='document.getElementById("doo").innerHTML =
            "lokasi Barbershop : Jl. Raya Siman No.Km. 6, Dusun I, Siman, <br>Kecamatan : Siman, <br>Kabupaten : Ponorogo, <br>Provinsi : Jawa Timur 63471,<br> no Telepon : (0352) 483762, <br>Wilayah Kampus : Perdesaan"'><img src="img/lokasi.png" width="30px"></button>
            <button type="button" class="ij" onclick='document.getElementById("doo").innerHTML =
            "Nama Staff : Haidar Bagir Alfahmi. "'><img src="img/staf.png" width="45px"></button>
            <button type="button" class="ij" onclick='document.getElementById("doo").innerHTML =
            " 1. Memberikan layanan yang terbaik.<br> 2. memperbaiki hasil yang kurang memuaskan sesuai prosedur.<br> 3. Rapi, bermodel, tren anak kekinian.<br> 4. percaya diri dan pekerja keras.<br> 5. baik dan rendah hati.<br> 6. potongan yang bernuansa rapi dan dinamis. "'><img src="img/goal.png" width="45"></button>
            <button type="button" class="ij" onclick='document.getElementById("doo").innerHTML =
            "1. Untuk memenuhi Hujatan para custemer. <br> 2. menumbuhkan rasa cinta Produk dalam Kampus <br> 3. Meningkatkan Ekonomi Proteksi. <br> 4. mengimplementasikan ajaran gontor. <br> 5. mengambil kata dari kita, untuk kita"'><img src="img/cs.png" width="45px"></button>
        </div>
    </div> 
</body>
<footer>
    <div id="column">
        <h2>FEEDBACK</h2> <br>
        jika kalian ingin memberikan saran, kritik, dan masukan di
        <a href="saran.php">feedback.com</a>, karena itu upaya untuk memajukan unit usaha
    </div> 
    <div id="column">
        <h2>AROUND THE WEBSITE</h2> <br>
        <ul>
            <li><a href="https://m.facebook.com/home.php"><img class="a1" src="img/fb.png" width="50px"></a></li>
            <li><a href="https://twitter.com/twitter"><img class="a2" src="img/Tweeter.png" width="50px"></a></li>
            <li><a href="https://drive.google.com/drive/u/0/my-drive"><img class="a3" src="img/google.png" width="50px"></a></li>
            <li><a href="https://www.instagram.com/accounts/login/"><img class="a4" src="img/ig.png" width="50px"></a></li>
        </ul>
    </div> 
    <div id="column">
        <h2>JOB VACANCY</h2> <br>
        Jadilah bagian dari keluarga kami Untuk mendapatkan petunjuk, kunjungi situs 
        <a href="#">candidate.com</a> dan submit form anda.
    </div>
</footer>
</html>