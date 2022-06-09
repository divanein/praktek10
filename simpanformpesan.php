<?php
include "koneksi.php";

$vposted=$_POST['posted'];
$vname=$_POST['name'];
$vemail=$_POST['email'];
$vaddress=$_POST['address'];
$vtahunlulus=$_POST['tahunlulus'];
$vpekerjaan=$_POST['pekerjaan'];
$vmessage=$_POST['message'];

//menyimpan ke tabel alumni
$sql= "INSERT INTO pesanalumni VALUES ('','$vposted','$vname','$vemail','$vaddress','$vtahunlulus','$vpekerjaan','$vmessage')";
mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
mysqli_close();
header("location:formpesanalumni.php");
?>