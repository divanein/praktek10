<?php 
    include("koneksi.php");
?>
<html>
    <head>
        <title> Tabel Data Siswa Baru </title>
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white"><center><h4>DATA SISWA</h4></center></div>
            <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Nama </th>
                <th scope="col"> Kelas </th>
                <th scope="col"> Alamat </th>
            </tr>
            <?php 
                $siswa = mysqli_query($conn, "SELECT * from tb_siswa");
                foreach ($siswa as $data) {
                    echo "<tr>";
                    echo "<th>".$data['id_siswa']."</th>";
                    echo "<th>".$data['nama']."</th>";
                    echo "<th>".$data['kelas']."</th>";
                    echo "<th>".$data['alamat']."</th>";
                }
            ?>
        </table>
        <a href="forminputsiswabaru.php"><button >Isi Form Siswa Baru</button></a>
        <a href="reportdata.php"><button>Report Data</button></a>    
            </div>
        </div>
    </div>
    </body>
</html>