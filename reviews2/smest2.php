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
    <h5 class="card-title">Form Pengulangan</h5>
    <table>
        <br>
        <br>

      <tr>
        <td>Masukkan Bintang</td>
        <td></td>
        <td><input type="number" name="masuk" value=""></td>
      </tr>

      <tr>
        <td>Pilih Bentuk Segitiga Bintang</td>
        <td></td>
        <td><input type="radio" name="satu" value="siku-siku">Siku-Siku</td>
      </tr>

      <tr>
          <td></td>
          <td></td>
          <td><input type="radio" name="satu" value="siter">Siku Terbalik</td>
      </tr>

      <tr>
          <td></td>
          <td></td>
          <td><input type="radio" name="satu" value="sempurna">Sempurna</td>
      </tr>

      <tr>
          <td></td>
          <td></td>
          <td><input type="radio" name="satu" value="semter">Sempurna Terbalik</td>
      </tr>

      <tr>
        <td><br></td>
        <td><br></td>
        <td><br><input type="submit" name="simpan" value="KIRIM"></td>
      </tr>

</table>
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
      $pilih = $_POST ['satu'];


     if($pilih == "siku-siku"){
    echo "<p align = left>";
    echo "<br>";
    echo "<b><i>Siku-siku</i><b>";
    echo "<br>";
    echo "<br>";
	for($a=$masuk;$a>0;$a--){
	for($b=$masuk;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}
  }

  elseif ($pilih == "siter"){
    echo "<br>";
    echo "<b><i>Siku Terbalik</i><b>";
    echo "<br>";
    echo "<br>";
    $star = $masuk;
    for($a=1; $a<=$star; $a++){
        for($i=1; $i<=$a; $i++){
              echo " &nbsp";
         }
         for($c=$star; $c>=$a; $c-=1){
                echo "*";
         }
        echo "<br>";
   }
  }

  elseif ($pilih == "sempurna"){
    echo "<br>";
    echo "<i>Sempurna</i>";
    echo "<br>";
    echo "<br>";
	for ($a = $masuk; $a > 0; $a--) {
        for ($i = 1; $i <= $a; $i++) {
            echo "&nbsp";
        }
        for ($a1 = $masuk; $a1 >= $a; $a1--) {
            echo "*";
        }
        echo "<br>";
    }
}

  elseif ($pilih == "semter"){
    echo "<br>";
    echo "Sempurna Terbalik";
    echo "<br>";
    echo "<br>";
	$star=$masuk;
      for($a=1; $a<=$star; $a++){
            for($b=1; $b<=$a; $b++){
                 echo "&nbsp";
       }
            for($c=$star; $c>=$a; $c-=1){
                  echo "*";
          }
          echo "<br>";
    }
}

  





}

  ?>
     <br>
     <br>
</form>
  </div>
</div>

    </div>