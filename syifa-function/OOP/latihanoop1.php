<?php

class jamTangan{
   
    var $merek;
    var $model;
    

    function letak(){
        echo "Jam Tangan Biasa Dipakai di Tangan";

    }

    function harga(){
        echo "Harga Jam Tangan Berbeda Sesuai Dengan Kualitasnya";
    }

    function koleksi(){
        echo "Kebanyakan Orang Membeli Jam Tangan Untuk Dikoleksi";

    }

}


$cetak = new jamTangan();
echo "<br>";
echo $cetak->letak();
echo "<br>";
echo $cetak->harga();
echo "<br>";
echo $cetak->koleksi();



?>