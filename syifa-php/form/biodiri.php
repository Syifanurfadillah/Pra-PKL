<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h4>Form Biodata Diri</h4>
    <form method ="POST" action = "proses.php">
         <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
        
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" value=""></td>
            </tr>
        
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" value=""></td>
            </tr>
        
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
                <input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td> <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Hindu">Hindu</option>
                </select></td>
            </tr>
        
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
        
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan">
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="KULIAH">Kuliah</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select></td>
            </tr>
        
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><select name="status">
                    <option value="sudah_menikah">Sudah Menikah</option>
                    <option value="belum_menikah">Belum Menikah</option>
                    <option value="janda">Janda</option>
                    <option value="duda">Duda</option>
                </select>
            </td>
            </tr>
        
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" value="Membaca">Membaca
                    <input type="checkbox" name="hobi" value="Menulis">Menulis
                    <input type="checkbox" name="hobi" value="Nonton film">Nonton film
                </td>
            </tr>

            <tr>
                <td>Cita-Cita</td>
                <td>:</td>
                <td><select name="cita-cita">
                    <option value="Programmer">Programmer</option>
                    <option value="Penulis">Penulis</option>
                    <option value="Presiden">Presiden</option>
                    <option value="DPR">DPR</option>
                </select></td>
            </tr>
            
            <tr>
                <td>Kata-Kata Bijak</td>
                <td>:</td>
                <td><textarea name="bijak"></textarea></td>
            </tr>
        
            <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value='KIRIM'></td>
                </tr>
                </table>
</form>
                </center>
</body>
</html>

