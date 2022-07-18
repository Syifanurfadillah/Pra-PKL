<?php

// membuat class

class kucing{
    // property/atribut

    var $jenis;
    var $warna;

    // method / function

    function makan(){
        echo "Kucing Suka Makan Ikam ";

    }

}

// object
$cetak = new kucing();
echo "<br>";
echo $cetak->makan();
echo $cetak->minum();



?>