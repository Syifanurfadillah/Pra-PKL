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
  <center>
  
  <div class="card" style="width: 30rem;">
  <div class="card-body">
  <form method ="POST" action = "">
    <table>
       
    <h3><font face= "Times New Roman">Data Nilai Siswa</font></h3>

      <tr>
        <td>Nama siswa :</td>
        <td></td>
        <td><input type="text" name="ya" value=""></td>
      </tr>

      <tr>
        <td>Jumlah Data :</td>
        <td></td>
        <td><input type="number" name="satu" value=""></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td><br><input type="submit" name="save" value="Proses"></td>
      </tr>
</center>
</table>
</form>
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
        <center>
      <br>
      <div class="card" style="width: 25rem;">
  <div class="card-body">

  <?php
  echo "<center>";
  if (isset($_POST ['save'])){
    $pilih = $_POST ['satu'];
    echo "<form method =POST action = hasil.php>";


    if ($pilih){
        for($pesan = 1; $pesan <= $pilih; $pesan++){
            echo "<table>";
            echo "<tr>";
            echo "<br>";
            echo "Data Siswa Ke-$pesan ";
            echo "<td>NIS : </td>";
            echo "<td><input type=number name=nis[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Nama : </td>";
            echo "<td><input type=text name=nama[] value=></td>";
            echo "<br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Kelas : </td>";
            echo "<td><input type=birthday name=kelas[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Bahasa Indonesia : </td>";
            echo "<td><input type=number name=indo[] value=></td>";
            echo "<br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Bahasa Inggris : </td>";
            echo "<td><input type=number name=inggris[] value=></td>";
            echo "<br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Matematika : </td>";
            echo "<td><input type=number name=mtk[] value=></td>";
            echo "<br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Produktif : </td>";
            echo "<td><input type=number name=pro[] value=></td>";
            echo "</tr>";
            echo "</table>";

        }
    }

    echo "<tr>";
    echo "<td></td>";
    echo "<input type=submit name=simpan value=Simpan>";
    echo "</tr>";
    echo "</form>";
    

    


}
  ?>
     <br>
     <br>

  </div>
</div>
</center>
    </div>
