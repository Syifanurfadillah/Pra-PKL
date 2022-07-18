<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2>
        <!-- form -->
        <form method ="POST" action = "">
            <table>
                <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'> </td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td><input type='text' name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type='date' name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type='text' name='kelas'></td>
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

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelas = $_POST['kelas'];

    echo"========== BIODATA DIRI ==========<br>";
    echo"=================================<br>";
    echo"Nama         = $nama <br>";
    echo"Tempat lahir = $tempat_lahir <br>";
    echo"Tanggal lahir = $tanggal_lahir <br>";
    echo"Kelas = $kelas <br>";
}
?>