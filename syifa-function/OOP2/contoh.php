<?php

// membuat class

class Kucing{

    // membuat properti/atribut
    var $jenis;
    var $warna;

    // method / function
    public function makan(){

        echo "Kucing Suka Makan Wishkas";
    }

    public function minum(){

        echo "Kucing Suka Minum Air";
    }
}

$cetak = new kucing();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";
echo $cetak->warna= "Kuning";
echo "<br>";
echo $cetak->jenis= "Anggora";

?>