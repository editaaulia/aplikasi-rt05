<?php
session_start();
include "konfig.php";

mysqli_query($kon, "DELETE FROM tb_berita WHERE id_berita ='$_GET[id]'") or die(mysqli_error($kon));
echo "<script> alert('Berita Berhasil Dihapus'); 
window.location='databerita.php';</script>";
?>