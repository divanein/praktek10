<?php 
include("koneksi.php"); 
        if(isset($_POST['submit'])) 
        $id1 = $_POST['id1'];
        $id2 = $_POST['id2'];
        $id3 = $_POST['id3'];
        $id4 = $_POST['id4'];
        $id5 = $_POST['id5'];
        $id6 = $_POST['id6'];
        $id7 = $_POST['id7'];
        $id8 = $_POST['id8'];
        $id9 = $_POST['id9'];
        $id10 = $_POST['id10'];
        $id11 = $_POST['id11'];
        $id12 = $_POST['id12'];

       //memasukkan ke tabel
        $query = "INSERT INTO tb_siswabaru (jns_daftar,tgl_masuk, NIS, Nama_lengkap, jns_kelamin, NISN, NIK, tempat_lahir, tgl_lahir, agama, alamat, no_telp) VALUES ('$id1','$id2','$id3','$id4','$id5','$id6','$id7','$id8','$id9','$id10','$id11','$id12')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "Data telah tersimpan";
        }else{
            echo "Penyimpanan gagal";
        }
    
    mysqli_close();
	header("location:forminputsiswabaru.php");
?>