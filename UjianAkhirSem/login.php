<?php
// cek apakah tombol submit sudah di tekan atau belum 
if(isset($_POST["submit"])) {
    //cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] == "namakamu") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $eror = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login_box">
    <form action="" method="post">
    <center><img class="aq" src="img/sa1.png" width="100px"></center>
        <div class="textbox">
            <div class="a"> <label for="username">Username</label> <br> </div>
            <input type="text" name="username" id="username" size="30" autocomplete="off">
        </div>
        <div class="textbox">
            <div class="a"> <label for="password">Password</label> <br> </div>
            <input type="password" name="password" id="password" size="30" autocomplete="off">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="a" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submit" class="btn">Submit</button>

        <?php if(isset($eror)) : ?>
            <p style="color: red; font-size: italic;">
                username or password incorect!
            </p>
        <?php endif ?>

        <p class="n"> belum memiliki akun? <a href="register.html">register here</a></p>
    </form>
    </div>
</body>
</html>