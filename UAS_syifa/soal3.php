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

<div class="container">
  <br>
  <center>
  <div class="card" style="width: 30rem;">
  <div class="card-body">
  <form method ="POST" action = "">
    <h5 class="card-title">Form Pengulangan</h5>
    <table>
      <br>
      <br>

      <tr>
        <td></td>
        <td>01.</td>
        <td>Deret Bilangan Ganjil</td>
      </tr>

      <tr>
        <td></td>
        <td>02.</td>
        <td>Segitiga Sama Kaki Terbalik</td>
      </tr>

      <tr>
        <td></td>
        <td>03.</td>
        <td>Deret Bilangan Kelipatan Tiga</td>
      </tr>

      <tr>
       <td>Pilih &ensp;</td>
       <td>:</td>
       <td><input type="text" name="pilih" value=""></td>
      </tr>

      <tr>
       <td>Masukan Angka &ensp;</td>
       <td>:</td>
       <td><input type="text" name="masuk" value=""></td>
      </tr>

      <tr>
        <td><br></td>
        <td><br></td>
        <td><br><input type="submit" name="simpan" value="KIRIM"></td>
      </tr>
    </table>
  </div>
</div>



  </center>

</div>

<!-- PHP -->
     
<div class="container">
      <br>
      <center>
      <div class="card" style="width: 25rem;">
  <div class="card-body">

  <?php
  if (isset($_POST ['simpan'])){
      $pilih = $_POST ['pilih'];
      $masuk = $_POST ['masuk'];

      if ($pilih == 1){
        echo "<center>";
        echo "<br>";
        echo "<h3><i>Deret Bilangan Ganjil</i></3>";
        echo "<br>";
        echo "<br>";
          for ($x = 1; $x <= $masuk; $x +=2){
            echo "$x &nbsp;";
          }
          echo "</center>";
      }

  elseif($pilih == 2){
    echo "<center>";
    echo "<br>";
    echo "<h3><i>Segitiga Sama Kaki Terbalik</i></h3>";
    echo "<br>";
    echo "<br>";
        for ($x = $masuk; $x >= 1; $x--){
            for ($v = $masuk; $v > $x; $v--){
                  echo " ";
              }
            for ($c = 1; $c <= $x; $c++){
                echo "<b>* &nbsp;</b>";
              }
                echo "<br>";
          }
          echo "</center>";
      } 

  elseif ($pilih == 3){
    echo "<center>";
    echo "<br>";
    echo "<h3><i>Deret Bilangan Kelipatan 3</i></h3>";
    echo "<br>";
    echo "<br>";
    for ($x = 3; $x <= $masuk; $x+=3){
        echo "<b>$x&ensp;</b>";
          }
        echo "</center>";
      }
  }
  ?>
     <br>
     <br>
</form>
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