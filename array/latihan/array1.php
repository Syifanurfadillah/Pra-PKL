<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        ["Modem", 350, 200, 100, 130, 230, 1010]
    ];
    ?>
    <table cellpadding="9" align="center" border="2">
        <tr>
            <th colspan="7">Laporan Penjualan Barang Akhir Bulan</th>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <th>Januari</th>
            <th>Februari</th>
            <th>Maret</th>
            <th>April</th>
            <th>Mei</th>
            <th>Total</th>
        </tr>
        <tr>
            <td><?php echo $barang[0][0]?></td>
            <td><?php echo $barang[0][1]?></td>
            <td><?php echo $barang[0][2]?></td>
            <td><?php echo $barang[0][3]?></td>
            <td><?php echo $barang[0][4]?></td>
            <td><?php echo $barang[0][5]?></td>
            <td><?php echo $barang[0][6]?></td>
        </tr>
        <tr>
            <td><?php echo $barang[1][0]?></td>
            <td><?php echo $barang[1][1]?></td>
            <td><?php echo $barang[1][2]?></td>
            <td><?php echo $barang[1][3]?></td>
            <td><?php echo $barang[1][4]?></td>
            <td><?php echo $barang[1][5]?></td>
            <td><?php echo $barang[1][6]?></td>
        </tr>
        <tr>
            <td><?php echo $barang[2][0]?></td>
            <td><?php echo $barang[2][1]?></td>
            <td><?php echo $barang[2][2]?></td>
            <td><?php echo $barang[2][3]?></td>
            <td><?php echo $barang[2][4]?></td>
            <td><?php echo $barang[2][5]?></td>
            <td><?php echo $barang[2][6]?></td>
        </tr>
        <tr>
            <td><?php echo $barang[3][0]?></td>
            <td><?php echo $barang[3][1]?></td>
            <td><?php echo $barang[3][2]?></td>
            <td><?php echo $barang[3][3]?></td>
            <td><?php echo $barang[3][4]?></td>
            <td><?php echo $barang[3][5]?></td>
            <td><?php echo $barang[3][6]?></td>
        </tr>
        <tr>
            <td><?php echo $barang[4][0]?></td>
            <td><?php echo $barang[4][1]?></td>
            <td><?php echo $barang[4][2]?></td>
            <td><?php echo $barang[4][3]?></td>
            <td><?php echo $barang[4][4]?></td>
            <td><?php echo $barang[4][5]?></td>
            <td><?php echo $barang[4][6]?></td>
        </tr>
        <tr>
            <td><?php echo $barang[5][0]?></td>
            <td><?php echo $barang[5][1]?></td>
            <td><?php echo $barang[5][2]?></td>
            <td><?php echo $barang[5][3]?></td>
            <td><?php echo $barang[5][4]?></td>
            <td><?php echo $barang[5][5]?></td>
            <td><?php echo $barang[5][6]?></td>
        </tr>
        <?php
        
        ?>
    </table>
</body>

</html>