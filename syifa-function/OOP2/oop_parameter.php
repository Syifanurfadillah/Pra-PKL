<?php

class Manusia{


    public function dataDiri($nama, $umur, $jk, $alamat, $agama, $hobi){
        echo "Nama : ".$nama . "<br>";
        echo "Umur : ".$umur . "<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Alamat : ". $alamat . "<br>";
        echo "Agama : ". $agama . "<br>";
        echo "Hobi : ". $hobi . "<br>";
    }
}

$cetak = new Manusia();

echo $cetak->dataDiri("Syifa", 16, "Perempuan", "Rancamanyar", "Islam", "Menulis");



?>