<?php

class Manusia{

    protected $nama = "Rizki Fadilah";
    private $ras;

    public function tampilkan(){
        echo "Hallo nama saya ";
    }





}

$cetak = new Manusia();


echo "<br>";
echo $cetak->nama();



?>