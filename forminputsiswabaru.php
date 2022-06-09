<!DOCTYPE html>
<html>
<head>
    <title>Formulir Peserta Didik</title>
</head>
<body>

    <div class="container">
        <form action="simpan.php" method="POST">
            <center>
        <div class="title" >
            Formulir Peserta Didik
        </div>  </center>

        <div class="form">
            <center><label>REGISTRASI PESERTA DIDIK</label></center> <br><br>

            <div class="input_field">
                <div class="custom_select">
                <label for="id1">1. Jenis Pendaftaran :</label> 
                <select name="id1">
                    <option value="Belum dipilih">PILIH</option>
                    <option value="Siswa baru">Siswa Baru</option>
                    <option value="Pindahan">Pindahan</option>
                </select>
                </div>
            </div><br>
            <div class="input_field">
                <label for="id2">2. Tanggal Masuk Sekolah  :</label> 
                <input id="id2" type="date" class="input" name="id2"/>
            </div><br>

            <div class="input_field">
                <label for="id3">3. NIS :</label> 
                <input id="id3" type="text" class="input" name="id3"/>
            </div><br>

            <div class="input_field">
                <label for="id4">4. Nama Lengkap :</label> 
                <input id="id4" type="text" class="input" name="id4"/>
            </div><br>

            <div class="input_field">
                <label for="id5">5. Jenis Kelamin :</label> 
                <input type="radio" name="id5" value="Laki-laki"> Laki-laki
                <input type="radio" name="id5" value="Perempuan"> Perempuan<br>
            </div><br>

            <div class="input_field">
                <label for="id6">6. NISN:</label> 
                <input id="id6" type="text" class="input" name="id6"/>
            </div><br>

            <div class="input_field">
                <label for="id7">7. NIK:</label> 
                <input id="id7" type="text" class="input" name="id7"/>
            </div><br>

            <div class="input_field">
                <label for="id8">8. Tempat lahir:</label> 
                <input id="id8" type="text" class="input" name="id8"/>
            </div><br>

            <div class="input_field">
                <label for="id9">9. Tanggal lahir:</label> 
                <input id="id9" type="date" class="input" name="id9"/>
            </div><br>

            <div class="input_field">               
                <div class="custom_select">
                <label for="id10">10. Agama :</label> 
                <select name="id10">
                    <option value="Belum dipilih">PILIH</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen/Protestan">Kristen/Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
            </div><br>

            <div class="input_field">
                <label for="id11">11. Alamat :</label> 
                <input id="id11" type="text" class="input" name="id11"/>
            </div><br>

            </div><br>
            <div class="input_field">
                <label for="id12">12. Nomor Telepon : </label> 
                <input id="id12" type="text" class="input" name="id12"/>
            </div><br>
            
            <div class="input_field">
                <center><input type="submit" value="submit" class="button" name="submit"></center>
            </div>          
        </div>
        </form>
        <br>
        <center><a href="tampildata.php"><button>Lihat Data</button></a></center>
    </div>
</body>
</html>