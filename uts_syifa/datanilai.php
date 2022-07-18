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
<?php

if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $bulanan = $_POST['bulanan'];
    $pts = $_POST['pts'];
    $pas = $_POST['pas'];
    $kehadiran = $_POST['kehadiran'];
    $nr=0;

   }
?>
      <center>
        <br>
      <h1><font face="Times New Roman">Data Nilai Mata Pelajaran Produktif</font></h1>
        <br>
        <br>
        <table border="4"  style="width: 67rem;">

  
    <tr>
      <th>&ensp;<font face="Century Gothic"> NO</font></th>
      <th>&ensp;<font face="Century Gothic"> Nama</font></th>
      <th>&ensp;<font face="Century Gothic"> Kelas</font></th>
      <th>&ensp;<font face="Century Gothic"> Nilai Bulanan<br>&ensp;(35%)</font></th>
      <th>&ensp;<font face="Century Gothic"> Nilai PTS<br>&ensp;(15%)</font></th>
      <th>&ensp;<font face="Century Gothic"> Nilai PAS<br>&ensp;(20%)</font></th>
      <th>&ensp;<font face="Century Gothic"> Nilai Kehadiran<br>&ensp;(30%)</font></th>
      <th>&ensp;<font face="Century Gothic"> Nilai <br>&ensp;Rapot</font></th>
      <th>&ensp;<font face="Century Gothic"> Grade</font></th>
      
    </tr>
  
  <?php 
      for($a=0; $a<count($no); $a++){
  ?>
    
    <tbody>
    <tr>
      <td>&ensp;<font face="Century Gothic"><?php echo $no[$a];?></font></td>
      <td>&ensp;<font face="Century Gothic"><?php echo $nama[$a];?></font></td>
      <td>&ensp;<font face="Century Gothic"><?php echo $kelas[$a];?></font></td>
      <td>&ensp;<font face="Century Gothic"><?php echo $bulanan[$a];?></font></td>
      <td>&ensp;<font face="Century Gothic"><?php echo $pts[$a];?></font></td>
      <td>&ensp;<font face="Century Gothic"><?php echo $pas[$a];?></font></td>
      <td>&ensp;<font face="Century Gothic"><?php echo $kehadiran[$a];?></font></td>
      <td>&ensp;<font face="Century Gothic"><?php echo 
            $nr =$bulanan[$a] * 35/100+ $pts[$a] * 15/100 + $pas[$a] * 20/100 + $kehadiran[$a] * 30/100;
            $nr; ?></td>

              <td><?php if($nr <= 100 && $nr >= 90){
                echo "Grade A";
              }

              else if($nr <= 89 && $nr >= 80){
                echo "Grade B";
              }

              else if($nr <= 79 && $nr >= 70){
                echo "Grade C";
              }

              else if($nr <= 69 && $nr >= 60){
                echo "Grade D";
              }

              else if($nr >= 0 && $nr <= 59){
                echo "Grade E";
              }

              else{
                echo "ERROR ";
              }}

              ?>
             </td></font>

     </tr>
     </center>
  </tbody>
            </table>            



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



    


    