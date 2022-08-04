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
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm p-3" style="background-color: #4169E1;">
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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Keluar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
    </nav>
    <div style="min-height: 78vh;">
        <h1 class="h3 mb-2 text-gray-800" style="padding-left:40px; padding-top:20px;">BERITA</h1>
        <div class="card shadow mb-4" style="padding-left:40px; padding-right:40px;">
        </div>
        <?php
        $query="SELECT*FROM tb_berita 
       ORDER BY published desc";
        $sqlberita=mysqli_query($kon, $query) 
       or die (mysqli_error($kon));
        
       while($data=mysqli_fetch_array($sqlberita))
       { ?>
            <h3 style="padding-left:40px; 
        padding-top:20px; padding-right:40px; 
        ">
                <?=$data['judul_berita']?>
            </h3>
            <p style="padding-left:40px; 
       padding-right:40px;"> Diterbitkan :
                <?=date('d-m-Y H:i:s', 
       strtotime($data['published']));?>
            </p>
            <p style="padding-left:40px; 
       padding-right:40px; text-align:justify;">
                <?= 
       substr ($data['isi_berita'],0,500)?>...</p>
            <a class="btn btn-primary" href="full.php?id=<?=$data['id_berita']?>" role="button" style="margin-bottom:10px; 
       margin-left:40px;"> Read More</a>
            <hr color="solid black" align="center" />
            <?php
        }?>
    </div>


    <!-- <footer class="bg-primary text-white text-center p-3"> -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <div class="text-white footer-bottom p-2" style="background-color: #4169E1; width:100%; bottom:0px;">
        <div class="container-fluid text-center">
            <p class="mt-2 mb-2">&copy; RT005/027. All Rights Reserved.<br> 2021-
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