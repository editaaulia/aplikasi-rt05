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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
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
                            <a class="nav-link active" aria-current="page" href="../auth/logout.php">Keluar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
    </nav>
    <section id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel1">
            <div class="carousel-inner" style="height: 25%;">
                <div class="carousel-item active">
                    <img src="assets/img/tcpy2.jpg" class="d-block w-100" style="height: 50%;" width="100%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="assets/img/tcpy1.jpg" class="d-block w-100" style="height: 50%;" width="100%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="assets/img/tcpy3.jpg" class="d-block w-100" style="height: 50%;" width="100%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
     </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
     </button>
        </div>
    </section>

    <br> <br>
    <section id="profil">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2> Profil RT</h2>
                    <p style="text-align:center">
                        <font size="4">RT 005/027 merupakan salah satu RT di RW 027 yang terletak di Perumahan Taman Cipayung Kecamatan Sukmajaya, Kelurahan Abadijaya Kota Depok</font>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center text-left">
                <div class="col-md-4">
                    <center>
                        <h3> VISI </h3>
                    </center>
                    <ol>
                        <li> Membentuk kerukunan warga RT005/027.</li>
                        <li> Memelihara lingkungan yang aman, nyaman, tentram, bersih, sehat, cerdas, dan kreatif. </li>
                        <li> Membangun kerjasama lingkungan yang harmonis dengan pelaksanaanya yang bertanggung jawab. </li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <center>
                        <h3>MISI</h3>
                    </center>
                    <ol>
                        <li> Menjaga kerukunan warga dengan kegiatan yg positif dan membangun. </li>
                        <li> Melayani dan memberikan pelayanan administrasi yg jujur dan transparan. </li>
                        <li> Memberikan wadah fasilitas sebagai bagian dari pengembangan bakat warga. </li>
                        <li> Bersama-sama menjaga keamanan, ketertiban, dan kebersihan lingkungan. </li>
                        <li> Menjalin kerjasama yang bermanfaat dengan berbagai lembaga eksternal. </li>
                    </ol>
                </div>
            </div>
            <hr>

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3>
                            <center>INFORMASI KONTAK</center>
                        </h3>
                        <br> <br>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-6">
                            <div class="info-box mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                                <h3>ALAMAT KAMI</h3>
                                <p>Perumahan Taman Cipayung, Kelurahan Abadijaya Kecamatan Sukmajaya Depok 16417</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="info-box  mb-4">
                            <i class="fas fa-phone"></i>
                                <h3>KONTAK KAMI</h3>
                                <p>Telepon: 0813 14385253</p>
                            </div>
                        </div>

                    </div>

                    <section class="lokasi">


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.981514137702!2d106.83930451476994!3d-6.396383495371795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb94b2a83feb%3A0x6340baa61510849a!2sPerumahan%20Taman%20Cipayung%2C%20Abadijaya%2C%20Kec.%20Sukmajaya%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1640109182496!5m2!1sen!2sid"
                            width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <br> <br>
                    </section>
            </section>
            </div>
    </section>

    <!-- <footer class="bg-primary text-white text-center p-3"> -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <div class="text-white footer-bottom p-2" style="background-color: #4169E1; width:100%; bottom:0px;">
        <div class="container-fluid text-center">
            <p class="mt-2 mb-2">&copy; RW 027. All Rights Reserved.<br> 2021-
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