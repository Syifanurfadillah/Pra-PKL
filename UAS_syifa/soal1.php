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

<center>
<br>
<div class="container">
<div class="card" style="width: 25rem;">
  <div class="card-body">
  <form method ="POST" action = "">
  <font face=Times New Roman><h4>Syarat Masuk Ke MIKO MALL</h4></font>
    <div class="content">
                <table>
                  <br>
                <tr>
                    <td>Nama Anda</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                    
                </tr>
               
                <tr>
                    <td><br>
                      Jenis Kelamin &ensp;</td>
                    <td><br>:&ensp;</td>
                    <td><br><input type="radio" name="jk" value="Laki-laki">&nbsp;Laki-laki &ensp;
                    <input type="radio" name="jk" value="Perempuan">&nbsp;Perempuan </td>
                </tr>
               
                <tr>
                    <td><br>Status Vaksin</td>
                    <td><br>:</td>
                    <td><br> <select name="status">
                    <option value="stts">---- Status Vaksin ----</option>
                    <option value="Belum Vaksin">---- Belum Vaksin ----</option>
                    <option value="Sudah Vaksin">---- Sudah Vaksin ----</option>
                    </select></td>
                </tr>

                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br><input type="submit" name="simpan" value="KIRIM"></td>
                </tr>
            
                    </table>
			</div>
		</div>
</form>
  </div>
</div>
</div>
</center>



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



    <!-- CARDS 2 -->
     
    <div class="container">
      <br>
      <center>
      <div class="card" style="width: 25rem;">
  <div class="card-body">
  <?php
  
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $jk = $_POST['jk'];
    echo "<b><h3>Pendataan Diri </h3></b> <br>";
   

    if($status == "Sudah Vaksin"){
      echo "<td></td>";
      echo "<td></td>";
        echo"Nama Anda    : $nama <br>";
        echo "Jenis Kelamin   : $jk <br>";
        echo"Status Vaksin    : $status <br>";
        echo "<br>";
        echo"<h5><i>Diizinkan</i></h5>";
       
    }
    else if($status == "Belum Vaksin"){
      echo"Nama Anda    : $nama <br> ";
      echo "Jenis Kelamin   : $jk <br>";
      echo"Status Vaksin  : $status <br>";
      echo "<br>";
      echo"<h5><i>Tidak Diizinkan</i></h5>";
      echo "<br>";
      echo "<a href='https://www.pedulilindungi.id/'>Silahkan Daftar Vaksin</a>";
      
    }
}
?>
<br>
<br>
  </div>
</div>
      </center>
    </div>


    