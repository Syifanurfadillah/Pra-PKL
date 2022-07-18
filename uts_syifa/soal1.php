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

  <a href="home.php" class="btn btn-outline-danger" role="button" aria-pressed="true">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  &ensp;&ensp;&ensp;

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a href="soal1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Soal 1</a>
      </li>
      &ensp;&ensp;&ensp;
      <li class="nav-item">
      <a href="datanilai.php" class="btn btn-outline-warning" role="button" aria-pressed="true">Data Nilai</a>
    
  </div>
</nav>

<!-- CARDS -->
<center>
  <br>
    <img src="logo.png" width="150" height="120" alt="">
    <h3><font face="Times New Roman">Penilaian Mata Pelajaran Produktif</font></h3>
  <br>

<div class="card" style="width: 30rem;" align="left">
    <div class="card-header">
      <font face="Times New Roman">Masukkan Jumlah Siswa</font>
    </div>

  <div class="card-body">
  <form method ="POST" action = "">
      <table>
        <tr>
          <td><font face="Century Gothic">Jumlah</font></td>
        </tr>
        <tr>
          <td><input type="number" name="satu" value="" style="width: 26rem;"></td>
        </tr>
        </table>
      
      <tr>
        <td></td>
        <td></td>
        <center>
        <td><br><input type="submit" name="save" value="Proses" class="btn btn-primary"></td>
        </center>
      </tr>
      
      </form>
  </div>
</div>
<br>

<!-- PHP -->

  <?php
    if (isset($_POST['save'])) {
    $jumlah = $_POST['satu'];
  ?>

  <form action="datanilai.php" method="post">
    <?php
     for ($i = 1; $i <= $jumlah; $i++) {
    ?>
    
  <div align = "left" class="card" style="max-width: 36rem;">
    <div class="card-header">
  <font face="Times New Roman">Data Siswa Ke - <?php echo $i; ?></font>
    </div>

      <div class="card-body">
        <h5 class="card-title"></h5>
      <table>
        <p class="card-text">
          <tr>
            <td><font face="Century Gothic">NIS</font></td>
          </tr>
        <tr>
          <td><input type="text" id="" class="form-control" aria-describedby="" name="no[]" style="width: 29rem;"><br></td>
        </tr>
      

        <div id="" class="form-text">
        </div>
        <p class="card-text">
          <tr>
            <td><font face="Century Gothic">Nama</td>
          </tr>
          <tr>
            <td><input type="text" id="" class="form-control" aria-describedby="" name="nama[]"><br></td>
          </tr>
        
        <div id="" class="form-text">
        </div>

        <p class="card-text">
        <tr>
            <td><font face="Century Gothic">Kelas</font></td>
        </tr>

        <tr>
          <td><input type="text" id="" class="form-control" aria-describedby="" name="kelas[]"></td>
        </tr>

        
        <div id="" class="form-text">
        </div>
        </table>
        <br>
        <br>
         
        <center>
        <h4><font face="Century Gothic">Nilai Produktif</font></h4>
        </center>
     
        <br>
        <br>

        <p class="card-text"><font face="Century Gothic">Nilai Bulanan(<b><i>35%</b></i>)</font></p>
        <input type="text" id="" class="form-control" aria-describedby="" name="bulanan[]">
        <div id="" class="form-text">
        </div>

        <p class="card-text"><font face="Century Gothic">Nilai PTS(<b><i>15%</b></i>)</font></p>
        <input type="text" id="" class="form-control" aria-describedby="" name="pts[]">
        <div id="" class="form-text">
        </div>

        <p class="card-text"><font face="Century Gothic">Nilai PAS(<b><i>20%</b></i>)</font></p>
        <input type="text" id="" class="form-control" aria-describedby="" name="pas[]">
        <div id="" class="form-text">
        </div>

        <p class="card-text"><font face="Century Gothic">Nilai Kehadiran(<b><i>30%</b></i>)</font></p>
        <input type="text" id="" class="form-control" aria-describedby="" name="kehadiran[]">
        <div id="" class="form-text">
        </div>
        <br>
      <?php
        }
      ?>

    <br>
      <center>
        <input type="submit" name ="simpan" value="Proses" class="btn btn-primary">
      </center>

      </div>
      </div>
      </form>
      <br>
      <?php
         }
      ?>





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

