<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>

        <table>
            <form action="" method="post">
        
            <tr>
                <td>Masukkan Panjang </td>
                <td>:</td>
                <td><input type="number" name="panjang" value=""></td>
            </tr>

            <tr>
                <td>Masukkan Lebar </td>
                <td>:</td>
                <td><input type="number" name="lebar" value=""></td>
            </tr>

            <tr>
                 <td></td>
                 <td></td>
                 <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>


        </form>
        </table>
       </center>
    
</body>
</html>

<?php

if(isset($_POST['simpan'])){

    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    class persegiPanjang{

    function persegi($panjang1, $lebar1){
        echo "Panjang : " . $panjang1 . "<br>";
        echo "Lebar : ". $lebar1 . "<br>";
        echo "Luasnya  : ".$panjang1 * $lebar1."<br>";
    }
}

$cetak = new persegiPanjang();

echo $cetak->persegi($panjang, $lebar);

}



?>