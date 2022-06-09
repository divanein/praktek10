<?php
include "koneksi.php";
$sql=mysqli_query($conn,"SELECT * FROM pesanalumni WHERE Id='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KESAN DAN PESAN</title>
</head>
<body>
	<center><h1>KESAN DAN PESAN ALUMNI</h1></center>
    <div>
    	<form class="" action="" method="POST">
    		Posted : <input type = "date" name = "posted" value="<?php echo $data['Posted']; ?>">
            <br>
            <br>
            Nama : <input type = "text" name = "name" value="<?php echo $data['Name']; ?>">
            <br> 
            <br>
            Email : <input type = "text" name = "email" value="<?php echo $data['Email']; ?>">
            <br> 
            <br>
            Alamat : <input type = "text" name = "address"  value="<?php echo $data['Address']; ?>"> 
            <br>
            <br>
            Tahun Lulus : <input type = "text" name = "tahunlulus"  value="<?php echo $data['TahunLulus']; ?>"> 
            <br>
            <br>
            Pekerjaan : <input type = "text" name = "pekerjaan"  value="<?php echo $data['Pekerjaan']; ?>"> 
            <br>
            <br>
            Message : <input type = "longbob" name = "message"  value="<?php echo $data['Message']; ?>"> 
            <br>
            <br>
            <center><input type="submit" value="edit" name="edit"></center>

    	</form>
    	<?php 
    	include "koneksi.php";

    	if(isset($_POST['edit'])){
    		mysqli_query($conn, "update pesanalumni set 
    		Posted ='$_POST[posted]',
			Name='$_POST[name]',
			Email='$_POST[email]',
			Address='$_POST[address]',
			TahunLulus='$_POST[tahunlulus]',
			Pekerjaan='$_POST[pekerjaan]',
			Message='$_POST[message]'
			where Id= '$_GET[kode]'");

			echo"<meta http-equiv=refresh content=2;URL='tampiltabel.php'>";
    	}
    	?>
    </div>
    <br>
        <center><a href="beranda.php"><button>Beranda</button></a></center>
</body>
</html>