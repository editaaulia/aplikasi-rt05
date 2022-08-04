<?php
session_start();
include "konfig.php";

$id=$_POST['id_berita'];
$judul_berita=trim(mysqli_real_escape_string($kon, $_POST['judul_berita']));
$isi_berita=trim(mysqli_real_escape_string(
$kon, $_POST['isi_berita']));mysqli_query($kon, "UPDATE tb_berita 
SET judul_berita = '$judul_berita', isi_berita = '$isi_berita' WHERE id_berita = '$id'") or die(mysqli_error($kon));echo "<script> alert('Data Berhasil Diubah'); 
window.location='databerita.php';</script>";
?>