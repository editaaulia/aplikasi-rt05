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


        <title>RW 027</title>
    </head>

    <!--header-->

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm p-3" style="background-color: #4169E1; position: sticky;">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/img/dpk.png" alt="" width="30" height="30" class="d-inline-block align-text-top"> RT005/027</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
            </button>
                <div class="header">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="profil.php">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="pengurusrt.php">Pengurus RT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="berita.php">Berita</a>
                            </li>

                            <?php if (isset($_SESSION['user'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="logout.php">Keluar</a>
                            </li>
                            <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                            </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php
        $iduser=$_SESSION['user']['id_user'];
        $ambil=mysqli_query($kon, "SELECT * FROM tb_user WHERE id_user='$iduser'");
        $pecah=mysqli_fetch_array($ambil);
    ?>

            <div class="jumbotron text-center" style="background-color: #ffffff; height: 78vh;">
                <img src="assets/img/dpk.png" width="150" />
                <h1 class="display-4"> <b> Selamat Datang </b></h1>
                <p class="lead"><b><?php echo $pecah['nama_user']; ?></b> anda telah login sebagai <b>warga</b> di website RT005/027 </p>
                <p> Aplikasi RT005 ini merupakan aplikasi untuk memberikan Informasi kepada warga dalam lingkungan RT. Sistem yang kami bangun tentunya dapat memberikan banyak manfaat bagi para pengurus RT dan warga di wilayah Perumahan Taman Cipayung. Perlu
                    dicatat! Semua akun yang terdaftar akan melalui proses review terlebih dahulu oleh pengurus RT, layak atau tidaknya sebuah akun tergantung dari validitas data yang diberikan.</p>
            </div>

            <!-- <footer class="bg-primary text-white text-center p-3"> -->
            <link rel="stylesheet" href="../assets/dist/css/style.css" />
            <div class="text-white footer-bottom p-2" style="background-color: #4169E1; width:100%; bottom:0px;">
                <div class="container-fluid text-center">
                    <p class="mt-2 mb-2">&copy; RT005/027. All Rights Reserved.<br> 2022-
                        <?=date('Y')?>
                    </p>
                </div>
            </div>
            <!-- <p class="mt-2 mb-2">&copy; EDITA 2021-<?=date('Y')?></p> </footer> -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    </body>

    </html>