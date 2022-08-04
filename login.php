<?php
session_start();
include "konfig.php";

?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <style>
            body {
                background: #4169E1;
                font-family: sans-serif;
            }
        </style>

<?php
    $proses = mysqli_real_escape_string($kon, @$_GET['proses']);
    if ($proses == "login") {
        $email = mysqli_real_escape_string($kon, $_POST['username']);
        $password = mysqli_real_escape_string($kon, $_POST['password']);
        $cekakun = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM tb_admin WHERE username='$email' AND password='$password'"));
        $ambil = mysqli_query($kon, "SELECT * FROM tb_user where username='$email' AND password='$password'");
        $cekakun1 = mysqli_num_rows($ambil);
        if ($cekakun != 0) { // untuk mengecek akun admin
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            
            echo "<script>alert('Anda Berhasil Login sebagai Administrator'); </script>";
            echo "<script>location='admin/index.php'; </script>";
        } elseif ($cekakun1 != 0) { // untuk mengecek akun member
            $akun = mysqli_fetch_assoc($ambil);
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['user'] = $akun;
            echo "<script>alert('Anda Berhasil Login'); </script>";
            echo "<script>location='index.php'; </script>";
        } else {
            echo "<script>alert('Anda Gagal login'); </script>";
        }
    }

  ?>


        <title>Login</title>
        <div class="kotak_login">
            <center><img src="assets/img/dpk.png" width="70" /></center>
            <br>
            <p class="tulisan_loginatas">Website RT 005/027 DEPOK</p>
            <p class="tulisan_login">login</p>
            <form action="?proses=login" method="post">

            <form action="?proses=login" method="post">
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username">

                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password">

                <center>
                    <p>belum punya akun ? <a class="login_daftar" href="daftar.php">daftar</a></p>
                </center>

                <input type="submit" class="tombol_login" value="LOGIN">

            </form>

            

        </div>
        </body>

    </html>