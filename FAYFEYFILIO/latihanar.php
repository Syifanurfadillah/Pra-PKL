<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border :1px solid black;
        }
        #table{
            border-collapse : collapse;
        }
        #th {
            background-color: #4169E1;
            color :white;
        }
        #tr{
            background-color: yellow;
            color :red;
        }
        #tr1{
            background-color: #B0C4DE;
        }
    </style>
  </head>
  <body>
    <?php
    $brng = [
        ["Komputer", 100, 90, 120, 80, 110, 500],
        ["Laptop", 50, 70, 110, 100, 80, 410],
        ["Hp", 150, 200, 160, 110, 90, 710],
        ["Ps", 40, 20, 60, 30, 70, 220],
        ["Tablet", 110, 130, 100, 80, 50, 470],
        ["Modem", 350, 200, 100, 130, 230, 1010]
    ];
    ?>
    <table id = "table" cellpadding="6" align="center" >
        <tr id ="tr">
            <center><th colspan="7" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laporan Penjualan Barang Akhir Bulan</th></center>
        </tr>
        
        
        <tr id = "th">
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
            echo "<tr style = 'background-color: white;'>";
            for ($k = 0; $k < 7; $k++) {
                if($b%2 == 0){
                    echo "<td bgcolor = '#00FFFF'>". $brng[$b][$k] . "</td>";
                }
                
                else if($b%2 == 1){
                    echo "<td>" . $brng [$b][$k] . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table> 
  </body>
</html>