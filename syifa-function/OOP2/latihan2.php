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
       <table>
           
           <form action="" method="post">

           <h3>Nilai Ujian</h3>

               <tr>
                   <td>Nama </td>
                   <td>:</td>
                   <td><input type="text" name="nama" value=""></td>
               </tr>

               <tr>
                <td>Jurusan </td>
                <td>:</td>
                <td><select name="jurusan" style="width: 11rem;">
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                </select></td>
               </tr>

               <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value=""><br></td>
               </tr>
        </table>


        <table>
            <h3>Nilai</h3>
            <tr>
                <td>N. Matematika</td>
                <td>:</td>
                <td><input type="number" name="mtk" value=""></td>
            </tr>

            <tr>
                <td>N. B. Indo</td>
                <td>:</td>
                <td><input type="number" name="indo" value=""></td>
            </tr>

            <tr>
                <td>N. B. Inggris</td>
                <td>:</td>
                <td><input type="number" name="ingg" value=""></td>
            </tr>

            <tr>
                <td>N. Produktif</td>
                <td>:</td>
                <td><input type="number" name="pro" value=""></td>
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
<br>
<br>

<?php

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    // NILAI
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $ingg = $_POST['ingg'];
    $pro = $_POST['pro'];

    class rapot{
        public $rata_rata;
        

        public function biodata($nama1, $jurusan1, $kelas1){
            echo "<center>";
            echo "<h2>Nilai Ujian Siswa</h2>";
            echo "<table border=1>";

            echo "<tr>";
            echo "<td>Nama </td>";
            echo "<td>: </td>";
            echo "<td>$nama1</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Jurusan </td>";
            echo "<td>: </td>";
            echo "<td>$jurusan1</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Kelas </td>";
            echo "<td>: </td>";
            echo "<td>$kelas1</td>";
            echo "</tr>";
            
        }

        public function nilai($mtk1, $indo1, $ingg1, $pro1){
            $this->rata_rata = ($mtk1 + $indo1 + $ingg1 + $pro1) / 4;

            echo "<tr>";
            echo "<td>Nilai Matematika </td>";
            echo "<td>: </td>";
            echo "<td>$mtk1</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Nilai B. Indonesia </td>";
            echo "<td>: </td>";
            echo "<td>$indo1</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Nilai B. Inggris </td>";
            echo "<td>: </td>";
            echo "<td>$ingg1</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Nilai Produktif </td>";
            echo "<td>: </td>";
            echo "<td>$pro1</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Rata-rata</td>";
            echo "<td>:</td>";
            echo "<td>$this->rata_rata</td>";
            echo "</tr>";

            
            echo "<tr>";
            echo "<td>Status</td>";
            echo "<td>:</td>";
            echo "<td>";
            
            if ($this->rata_rata >= 80){
                echo "LULUS";
            }

            else if ($this->rata_rata < 80){
                echo "TIDAK LULUS";
            }  

            else{
                echo "Tidak ada nilai";
            }

            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</center>";

            
        }

        

        
    }

$cetak = new rapot();

echo $cetak->biodata($nama, $jurusan, $kelas);
echo $cetak->nilai($mtk, $indo, $ingg, $pro);






}



?>