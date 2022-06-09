<?php
include "koneksi.php";

$vnama=$_POST['nama'];
$valamat=$_POST['alamat'];
$vemail=$_POST['email'];
$vangkatan=$_POST['angkatan'];
$vjurusan=$_POST['jurusan'];
$vusername=$_POST['username'];
$vpassword=$_POST['password'];

//menyimpan ke tabel alumni
$sql= "INSERT INTO alumni VALUES ('','$vnama','$valamat','$vemail','$vangkatan','$vjurusan','$vusername','$vpassword')";
mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
mysqli_close();
header("location:formsignup.html");
?>