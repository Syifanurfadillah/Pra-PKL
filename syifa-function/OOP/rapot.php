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
        <h2>Rapot Siswa SMK Assalaam</h2>

        <table>
        <form action="" method="post">
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value=""><br></td>
            </tr>

            
            <tr>
                <td>Jurusan </td>
                <td>:</td>
                <td><select name="jurusan" style="width: 11rem;">
                <option value="RPL">RPL</option>
                <option value="TBSM">TBSM</option>
                <option value="TKRO">TKRO</option>
                </select></td>
            </tr>
           
       
        </table>

        <!-- MATEMATIKA -->

        <table>
        
            <h2>Matematika</h2>

            <tr>
                <td>Nilai Harian </td>
                <td>:</td>
                <td><input type="number" name="mtkHarian" value=""></td>
            </tr>

            <tr>
                <td>Nilai Tugas </td>
                <td>:</td>
                <td><input type="number" name="mtkTugas" value=""></td>
            </tr>

            <tr>
                <td>Nilai UTS </td>
                <td>:</td>
                <td><input type="number" name="mtkUts" value=""></td>
            </tr>

            <tr>
                <td>Nilai UAS </td>
                <td>:</td>
                <td><input type="number" name="mtkUas" value=""></td>
            </tr>
        
        
       
        </table>

        <!-- INDONESIA -->

        <table>
        
            <h2>Bahasa Indonesia</h2>

            <tr>
                <td>Nilai Harian </td>
                <td>:</td>
                <td><input type="number" name="indoHarian" value=""></td>
            </tr>

            <tr>
                <td>Nilai Tugas </td>
                <td>:</td>
                <td><input type="number" name="indoTugas" value=""></td>
            </tr>

            <tr>
                <td>Nilai UTS </td>
                <td>:</td>
                <td><input type="number" name="indoUts" value=""></td>
            </tr>

            <tr>
                <td>Nilai UAS </td>
                <td>:</td>
                <td><input type="number" name="indoUas" value=""></td>
            </tr>
        
        
        
        </table>

        <!-- INGGRIS -->

        <table>
        
            <h2>Bahasa Inggris</h2>

            <tr>
                <td>Nilai Harian </td>
                <td>:</td>
                <td><input type="number" name="ingHarian" value=""></td>
            </tr>

            <tr>
                <td>Nilai Tugas </td>
                <td>:</td>
                <td><input type="number" name="ingTugas" value=""></td>
            </tr>

            <tr>
                <td>Nilai UTS </td>
                <td>:</td>
                <td><input type="number" name="ingUts" value=""></td>
            </tr>

            <tr>
                <td>Nilai UAS </td>
                <td>:</td>
                <td><input type="number" name="ingUas" value=""></td>
            </tr>
        
        
        </table>

        <!-- PRODUKTIF -->

        <table>
        
            <h2>Produktif</h2>

            <tr>
                <td>Nilai Harian </td>
                <td>:</td>
                <td><input type="number" name="pdfHarian" value=""></td>
            </tr>

            <tr>
                <td>Nilai Tugas </td>
                <td>:</td>
                <td><input type="number" name="pdfTugas" value=""></td>
            </tr>

            <tr>
                <td>Nilai UTS </td>
                <td>:</td>
                <td><input type="number" name="pdfUts" value=""></td>
            </tr>

            <tr>
                <td>Nilai UAS </td>
                <td>:</td>
                <td><input type="number" name="pdfUas" value=""></td>
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
<br>
<br>
<br>
<hr>
<br>
<br>

<?php

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    //matematika
    $mtkHarian = $_POST['mtkHarian'];
    $mtkTugas = $_POST['mtkTugas'];
    $mtkUts = $_POST['mtkUts'];
    $mtkUas = $_POST['mtkUas'];

    //Indonesia
    $indoHarian = $_POST['indoHarian'];
    $indoTugas = $_POST['indoTugas'];
    $indoUts = $_POST['indoUts'];
    $indoUas = $_POST['indoUas'];

    // inggris
    $ingHarian = $_POST['ingHarian'];
    $ingTugas = $_POST['ingTugas'];
    $ingUts = $_POST['ingUts'];
    $ingUas = $_POST['ingUas'];

    // pdf
    $pdfHarian = $_POST['pdfHarian'];
    $pdfTugas = $_POST['pdfTugas'];
    $pdfUts = $_POST['pdfUts'];
    $pdfUas = $_POST['pdfUas'];


    class rapot{

    function biodata($nama1, $kelas1, $jurusan1){
        echo "<h2>Data Nilai Siswa</h2>";
        echo "Nama : " . $nama1 . "<br>";
        echo "Kelas : ". $kelas1 . "<br>";
        echo "Jurusan  : ".$jurusan1 ."<br>";
    }

    function matematika($harian1, $tugas1, $uas1, $uts1){
        echo "<br>";
        echo "----------------------------;";
        $rapot = $harian1 + $tugas1 + $uas1 + $uts1;
        $hasil = $rapot / 4;
        echo "<h3>Matematika</h3>". "<br>";
        echo "Nilai Harian : " . $harian1 . "<br>";
        echo "Nilai Tugas : " . $tugas1. "<br>";
        echo "Nilai UTS  : " . $uas1 . "<br>";
        echo "Nilai UAS : " . $uts1 . "<br>";
        echo "Nilai Rapot : " . $hasil . "<br>";
    }

    function indo($harian1, $tugas1, $uas1, $uts1){
        echo "<br>";
        echo "----------------------------;";
        $rapot = $harian1 + $tugas1 + $uas1 + $uts1;
        $hasil = $rapot / 4;
        echo "<h3>Bahasa Indonesia</h3>". "<br>";
        echo "Nilai Harian : " . $harian1 . "<br>";
        echo "Nilai Tugas : " . $tugas1. "<br>";
        echo "Nilai UTS  : " . $uas1 . "<br>";
        echo "Nilai UAS : " . $uts1 . "<br>";
        echo "Nilai Rapot : " . $hasil . "<br>";
    }

    function inggris($harian1, $tugas1, $uas1, $uts1){
        echo "<br>";
        echo "----------------------------;";
        $rapot = $harian1 + $tugas1 + $uas1 + $uts1;
        $hasil = $rapot / 4;
        echo "<h3>Bahasa Inggris</h3>". "<br>";
        echo "Nilai Harian : " . $harian1 . "<br>";
        echo "Nilai Tugas : " . $tugas1. "<br>";
        echo "Nilai UTS  : " . $uas1 . "<br>";
        echo "Nilai UAS : " . $uts1 . "<br>";
        echo "Nilai Rapot : " . $hasil . "<br>";
    }

    function produktif($harian1, $tugas1, $uas1, $uts1){
        echo "<br>";
        echo "----------------------------;";
        $rapot = $harian1 + $tugas1 + $uas1 + $uts1;
        $hasil = $rapot / 4;
        echo "<h3>Produktif</h3>". "<br>";
        echo "Nilai Harian : " . $harian1 . "<br>";
        echo "Nilai Tugas : " . $tugas1. "<br>";
        echo "Nilai UTS  : " . $uas1 . "<br>";
        echo "Nilai UAS : " . $uts1 . "<br>";
        echo "Nilai Rapot : " . $hasil . "<br>";
    }
}

$cetak = new rapot();

echo $cetak->biodata($nama, $kelas, $jurusan);
echo $cetak->matematika($mtkHarian, $mtkTugas, $mtkUts, $mtkUas);
echo $cetak->indo($indoHarian, $indoTugas, $indoUts, $indoUas);
echo $cetak->inggris($ingHarian, $ingTugas, $ingUts, $ingUas);
echo $cetak->produktif($pdfHarian, $pdfTugas, $pdfUts, $pdfUas);

}

?>