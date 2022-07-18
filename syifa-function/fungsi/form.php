<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=table, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
    <h2>Biodata</h2>
    <table>
        <form action="" method="post">

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value=""></td>
        </tr>

        <tr>
            <td>Tangal lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" value=""></td>
        </tr>

        <tr>
            <td><label>Jenis Kelamin</label></td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
            <input type="radio" name="jk" value="Perempuan">Perempuan</td>
        </tr>

        <tr>
            <td><label>Agama</label></td>
            <td>:</td>
            <td><select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            </select></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi" value="Membaca">Membaca
            <input type="checkbox" name="hobi" value="Menggambar">Menggambar
            <input type="checkbox" name="hobi" value="Makan Seblak">Makan Seblak</td>
        </tr>

        <tr>
            <td>Moto Hidup</td>
            <td>:</td>
            <td><textarea name="moto"></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>

    </form>
    </table>
    </center>

</body>
</html>

<?php

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $moto = $_POST['moto'];


    function biodata($nama1, $tanggal_lahir1, $jenis_kelamin1, $agama1, $alamat1, $hobi1, $moto1){
        echo "Nama           : ".$nama1."<br>";
        echo "Tanggal Lahir  : ".$tanggal_lahir1."<br>";
        echo "Jenis Kelamin  : ".$jenis_kelamin1."<br>";
        echo "Agama  : ".$agama1."<br>";
        echo "Alamat  : ".$alamat1."<br>";
        echo "Hobi  : ".$hobi1."<br>";
        echo "Motto Hidup  : ".$moto1."<br>";
    }

    biodata($nama, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $hobi, $moto);


}


?>