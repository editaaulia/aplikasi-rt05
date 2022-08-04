<?php
session_start();
include "konfig.php";

mysqli_query($kon, "DELETE FROM tb_user WHERE id_user ='$_GET[id]'") or 
die(mysqli_error($kon));
echo "<script> alert('User Berhasil Dihapus'); 
window.location='datauser.php';</script>";
?>