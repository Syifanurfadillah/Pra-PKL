<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Array</title>
  </head>
  <body>
  
    <?php
    $barang = [
        ["Komputer", 100, 90, 120, 80, 110, 500],
        ["Laptop", 50, 70, 110, 100, 80, 410],
        ["Hp", 150, 200, 160, 110, 90, 710],
        ["Ps", 40, 20, 60, 30, 70, 220],
        ["Tablet", 110, 130, 100, 80, 50, 470],
        ["Modem", 350, 200, 100, 130, 230, 1010],
    ];
    ?>
    <br>
    <table cellpadding="8" align="center" border="2">
        <tr bgcolor='#FFD700'>
            <th colspan="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laporan Penjualan Barang Akhir BulanS</th>
        </tr>
        <tr bgcolor='#9932CC'>
            <th>Nama Barang</th>
            <th>Januari</th>
            <th>Februari</th>
            <th>Maret</th>
            <th>April</th>
            <th>Mei</th>
            <th>Total</th>
        </tr>
    <?php
       for ($b = 0; $b < 6; $b++) {
        echo "<tr>";
        for ($k = 0; $k < 7; $k++) {
            echo "<td>" . $barang[$b][$k] . "</td>";
        }
        echo "</tr>";
    }
?>
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
  </body>
</html>