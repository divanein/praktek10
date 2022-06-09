<?php 
include "koneksi.php";
$sql="select * from tb_siswabaru;";
$qry=mysqli_query($conn,$sql) or die("Proses cetak gagal");
echo "<center><h1> Data Siswa</h1></center>";
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
		<tr>
		//tampilan awal bagian atas tabel.
			<th>No</th>
			<th>Jenis Pendaftaran</th>
			<th>Tanggal Masuk Sekolah</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Jenis Kelamin</th>
			<th>NISN</th>
			<th>NIK</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Agama</th>
			<th>Alamat</th>
			<th>Nomor telepon</th>";
		$no=1;
		//menampilkan ke tabel tiap baris dari database. Menampilkan sesuai urutan array 
		while ($hasil=mysqli_fetch_row($qry)) {
			echo "<tr>
				<td>$no</td>
					<td>$hasil[1]</td>
					<td>$hasil[2]</td>
					<td>$hasil[3]</td>
					<td>$hasil[4]</td>
					<td>$hasil[5]</td>
					<td>$hasil[6]</td>
					<td>$hasil[7]</td>
					<td>$hasil[8]</td>
					<td>$hasil[9]</td>
					<td>$hasil[10]</td>
					<td>$hasil[11]</td>
					<td>$hasil[12]</td>
					</tr>";
			$no++;
		}
		echo"</table>";
?>
		<center>
			<br>
			<a href="forminputsiswabaru.php"><button >Isi Form Siswa Baru</button></a>
        	<a href="reportdata.php"><button>Report Data</button></a> 
        </center>  