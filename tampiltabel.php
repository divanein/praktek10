<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel kesan dan Pesan</title>
</head>
<body>
	
	<br>	 
	<center><h1>Data user</h1></center>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Posted</th>
			<th>Name</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Tahun lulus</th>
			<th>Pekerjaan</th>
			<th>Message</th>
			<th colspan = "2">Opsi</th>		
		</tr>

		<?php 
		include "koneksi.php";
		$no = 1;
		$query_mysql = mysqli_query($conn,"SELECT * FROM pesanalumni")or die(mysql_error());
		while($data = mysqli_fetch_array($query_mysql)){ echo "
			<tr>
				<td>$no</td>
				<td>$data[Id]</td>
				<td>$data[Posted]</td>
				<td>$data[Name]</td>
				<td>$data[Email]</td>
				<td>$data[Address]</td>
				<td>$data[TahunLulus]</td>
				<td>$data[Pekerjaan]</td>
				<td>$data[Message]</td>
				<td><a href='?kode=$data[Id]'>Hapus</a></td>
				<td><a href='editformpesan.php?kode=$data[Id]'>Ubah</a></td>
			</tr>";
			$no++;
		}
		?>
	</table>

	<?php
	include "koneksi.php";
		if(isset($_GET['kode'])) {	
			mysqli_query($conn,"DELETE FROM pesanalumni WHERE Id='$_GET[kode]'");
					echo "Data terhapus";
					echo"<meta http-equiv=refresh content=2;URL='tampiltabel.php'>";
			}
			?>
			<br>
			<center><a href="beranda.php"><button>Beranda</button></a></center>

</body>
</html>
