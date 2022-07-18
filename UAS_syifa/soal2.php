<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <img src="logo.png" width="70" height="60" class="d-inline-block align-top" alt="">
  </a>
    <a href="soal1.php" class="btn btn-outline-primary" role="button" aria-pressed="true">SOAL 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  &ensp;&ensp;&ensp;
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a href="soal2.php" class="btn btn-outline-danger" role="button" aria-pressed="true">SOAL 2</a>
      </li>
      &ensp;&ensp;&ensp;
      <li class="nav-item">
      <a href="soal3.php" class="btn btn-outline-warning" role="button" aria-pressed="true">SOAL 3</a>
    
  </div>
</nav>

<!-- CARDS -->

<div class="container" align="center">
  <br>
  <div class="card text-center" style="width: 50rem;" >
  <div class="card-body" style="width: 50rem;">
  <form method ="POST" action = "">
  <font face=Times New Roman><h1 class="card-title">Penggajihan Karyawan</h1></font>
  <font face=Times New Roman><h3>PT. Selalu Makmur Jaya</h3></font>
    <table>
      <br>
      <br>
      
      <tr align="left">
       <td>Nama Bendahara &ensp;</td>
        <td>: &ensp;</td>
        <td><input type="text" name="bendahara" value=""></td>
      </tr>

      <tr align="left">
       <td>Nama Pekerja &ensp;</td>
        <td>: &ensp;</td>
        <td><input type="text" name="pekerja" value=""></td>
      </tr>

      <tr align="left" >
        <td>Jenis Kelamin </td>
        <td>:</td>
        <td><input type="radio" name="jk" value="Laki-laki">&nbsp;Laki-laki &ensp;
        <input type="radio" name="jk" value="Perempuan">&nbsp;Perempuan </td>
      </tr>

      <tr align="left">
       <td>Tanggal Gajian &ensp;</td>
        <td>: &ensp;</td>
        <td><input type="date" name="tg" value=""></td>
      </tr>

      <tr align="left">
        <td>Jabatan</td>
        <td>:</td>
        <td><select name="jabatan">
        <option value="Direktur">Direktur &ensp;</option>
        <option value="Manajer">Manajer &ensp;</option>
        <option value="Karyawan">Karyawan &ensp;</option>
        <option value="OB">OB &ensp;</option>
        </select></td>
      </tr>

      <tr align="left">
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td><select name="pendidikan">
        <option value="SD">SD &ensp;&ensp;&ensp;&ensp;&ensp;</option>
        <option value="SMP">SMP &ensp;&ensp;&ensp;&ensp;&ensp;</option>
        <option value="SMA">SMA &ensp;&ensp;&ensp;&ensp;&ensp;</option>
        <option value="S1">S1 &ensp;&ensp;&ensp;&ensp;&ensp;</option>
        </select></td>
      </tr>

      <tr align="left">
       <td>Lembur &ensp;</td>
        <td>: &ensp;</td>
        <td><input type="text" name="lembur" value=""> Hari / Rp. 20.000</td>
      </tr>

      <tr align="left">
       <td>Potongan &ensp;</td>
        <td>: &ensp;</td>
        <td><input type="number" name="potongan" value=""></td>
      </tr>

      <tr align="left">
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="KIRIM"></td>
      </tr>

    </table>
</form>
  </div>
</div>
</div>

<!-- IFSEET -->

<div class="container">
      <br>
      <center>
      <div class="card" style="width: 50rem;">
  <div class="card-body">
  <?php
  
if(isset($_POST['simpan'])){
    $bendahara = $_POST['bendahara'];
    $pekerja = $_POST['pekerja'];
    $jk = $_POST['jk'];
    $tggl = $_POST['tg'];
    $pendidikan = $_POST['pendidikan'];
    $jabatan = $_POST['jabatan'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];

    echo "<h1> Struk Gaji Karyawan </h1>";
    echo "=====================================================================";
    echo "<p align= right> Tanggal : <i>$tggl</i> </p>";
    echo "<h4> <p align = left><i> Gaji Pokok  </i></p></h4>";
    echo "<p align = left><font face=Times New Roman>Nama Karyawan : $pekerja </font></p>";
    echo "<p align = left><font face=Times New Roman>Jenis Kelamin : $jk</font></p>";
    echo "<p align = left><font face=Times New Roman>Pendidikan Terakhir : $pendidikan </font></p>";
    
    if ($jabatan == "Direktur"){
      $gaji = 10000000;
      echo "<p align = left><font face=Times New Roman>Jabatan : $jabatan</font></p>";
      echo "<p align = left><font face=Times New Roman>Gaji : Rp. $gaji</font></p>";
      echo "<h4> <p align = left><i> Tunjangan  </i></p></h4>";
      if($pendidikan == "SD"){
        $sd =200000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sd </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sd + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMP"){
        $smp =500000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $smp </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $smp + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMA"){
      $sma =1000000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sma </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sma + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "S1"){
        $s1 =1500000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $s1 </font></p>";
        $vakasi = $lembur *20000;
        $bersih = $gaji + $s1 + $vakasi;
        $hasil = $bersih - $potongan;
        echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
        echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
        echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
        }
    }


    else if ($jabatan == "Manajer"){
      $gaji = 7500000;
      echo "<p align = left><font face=Times New Roman>Jabatan : $jabatan</font></p>";
      echo "<p align = left><font face=Times New Roman>Gaji : Rp. $gaji</font></p>";
      echo "<h4> <p align = left><i> Tunjangan  </i></p></h4>";
      if($pendidikan == "SD"){
        $sd =200000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sd </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sd + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMP"){
        $smp =500000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $smp </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $smp + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMA"){
      $sma =1000000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sma </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sma + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "S1"){
        $s1 =1500000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $s1 </font></p>";
        $vakasi = $lembur *20000;
        $bersih = $gaji + $s1 + $vakasi;
        $hasil = $bersih - $potongan;
        echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
        echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
        echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
        }
    }


    else if ($jabatan == "Karyawan"){
      $gaji = 5000000;
      echo "<p align = left><font face=Times New Roman>Jabatan : $jabatan</font></p>";
      echo "<p align = left><font face=Times New Roman>Gaji : Rp. $gaji</font></p>";
      echo "<h4> <p align = left><i> Tunjangan  </i></p></h4>";
      if($pendidikan == "SD"){
        $sd =200000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sd </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sd + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMP"){
        $smp =500000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $smp </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $smp + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMA"){
      $sma =1000000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sma </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sma + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "S1"){
        $s1 =1500000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $s1 </font></p>";
        $vakasi = $lembur *20000;
        $bersih = $gaji + $s1 + $vakasi;
        $hasil = $bersih - $potongan;
        echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
        echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
        echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
        }
    }


    else if ($jabatan == "OB"){
      $gaji = 25000000;
      echo "<p align = left><font face=Times New Roman>Jabatan : $jabatan</font></p>";
      echo "<p align = left><font face=Times New Roman>Gaji : Rp. $gaji</font></p>";
      echo "<h4> <p align = left><i> Tunjangan  </i></p></h4>";
      if($pendidikan == "SD"){
        $sd =200000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sd </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sd + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMP"){
        $smp =500000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $smp </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $smp + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "SMA"){
      $sma =1000000;
      echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $sma </font></p>";
      $vakasi = $lembur *20000;
      $bersih = $gaji + $sma + $vakasi;
      $hasil = $bersih - $potongan;
      echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
      echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
      echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
      }

      else if($pendidikan == "S1"){
        $s1 =1500000;
        echo "<p align = left><font face=Times New Roman>Tunjangan Pendidikan : $s1 </font></p>";
        $vakasi = $lembur *20000;
        $bersih = $gaji + $s1 + $vakasi;
        $hasil = $bersih - $potongan;
        echo "<p align = left><font face=Times New Roman>Vakasi Lembur : $vakasi</font></p>";
        echo "<p align = left><font face=Times New Roman>Potongan : Rp. $potongan</font></p>";
        echo "<h5> <p align = left><i>Total Gaji : Rp. $hasil </i></p></h5>";
        }
    }

    echo "<p align= right> <i>Bendahara : $bendahara </i> </p>";


    

    


    
}
?>
<br>
<br>
  </div>
</div>
      </center>
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>