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
    

<!-- CARDS -->

<div class="container">
  <br>
  
  <div class="card" style="width: 30rem;">
  <div class="card-body">
  <form method ="POST" action = "">
    <br>
    <br>
    <h4>Belajar Form</h4>

    <br>

    <table>
        <tr>
            <td>Nilai :</td>
            <td><input type="number" name="masuk" value=""></td>
        </tr>
    </table>

    <tr>
        <br>
        <br>
        <td>Masukkan Nilai</td>
        <br>
        <br>
    </tr>

    <tr>
        <td><br><input type="submit" name="simpan" value="KIRIM"></td>
      </tr>



  </div>
</div>


  

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

<!-- PHP -->
     
<div class="container">
      <br>
      
      <div class="card" style="width: 25rem;">
  <div class="card-body">

  <?php
  if (isset($_POST ['simpan'])){
      $masuk = $_POST ['masuk'];
     

     if($masuk >= 75 && $masuk < 100){
    echo "<br>";
    echo "Nilai anda " . $masuk . " Selamat anda lulus!!";
    echo "<br>";
    echo "<br>";
	
  }

  elseif ($masuk < 75 && $masuk >=0){
    echo "<br>";
    echo "Nilai anda " . $masuk . " Maaf anda tidak lulus!!";
    echo "<br>";
    echo "<br>";
    
  }

  else{
      echo "Maaf nilai tidak ada";
  }

  

  





}

  ?>
     <br>
     <br>
</form>
  </div>
</div>

    </div>