<?php 


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
</head>
<body>
    <title>Login</title>
            <?php 
                if(isset($_POST["submit"])){
                    // Mengambil input dari form dan dimasukan ke variabel
                    $nama = $_POST["nama"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    // Mengecek apakah email sudah dipakai apa belum
                    $ambil = mysqli_query($kon,"SELECT * FROM tb_user where username='$username'");
                    $usernamecocok=mysqli_num_rows($ambil);
                    if($usernamecocok==1){
                        echo"<script>alert('Email anda sudah digunakan'); </script>";
                        echo"<script>location='daftar.php'; </script>";
                        return false;
                    }else{
                        $insert=mysqli_query($kon,"INSERT INTO tb_user (nama_user,username,password)
                        VALUES ('$nama','$username','$password')");
                        echo"<script>alert('Akun Berhasil dibuat');</script>";
                        echo"<script>location='login.php';</script>";
                    }

                }
            
            
            ?>
    <div class="kotak_login">
        <center><img src="assets/img/dpk.png" width="70" /></center>
        <br>
        <p class="tulisan_loginatas">Website RT 005/027 DEPOK</p>
        <p class="tulisan_login">Daftar</p>

        <form action="?proses=daftar" method="post">
            <label>Nama</label>
            <input type="text" name="nama" class="form_login" placeholder="Nama">

            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password">

            <center>
                <p>sudah punya akun ? <a class="login_daftar" href="login.php">login</a></p>
            </center>

            <button type="submit" class="tombol_login" name="submit">Daftar</button>

        </form>

    </div>
    </body>

</html>