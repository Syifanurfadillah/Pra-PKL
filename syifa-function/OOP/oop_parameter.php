<?php

class Manusia{

    function biodata($nama){

      echo "Nama : ".$nama;
      
    }
    
    function kelamin($jenis_kelamin){
        echo "Jenis Kelamin : ". $jenis_kelamin;
    }

    function tanggal_lahir($tgl_lahir){
        echo "Tanggal Lahir : ". $tgl_lahir;
    }

    function agama($agama){
        echo "Agama : " . $agama;
    }

    function alamat($alamat){
        echo "Alamat : ". $alamat;
    }

}

$cetak = new Manusia();

echo $cetak->biodata("Syifa Nurfadillah");
echo "<br>";
echo $cetak->kelamin("Perempuan");
echo "<br>";
echo $cetak->tanggal_lahir("24 September 2005");
echo "<br>";
echo $cetak->agama("Islam");
echo "<br>";
echo $cetak->alamat("Kp. Bojong Koneng");




?>