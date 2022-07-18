<?php

//fungsi dengan parameter

function biodata($nama, $jenis_kelamin, $tanggal_lahir, $agama, $alamat, $hobi="Mengambar"){
    echo "Nama : " . $nama. "<br>";
    echo "Jenis Kelamin : " .$jenis_kelamin . "<br>";
    echo "Tanggal Lahir : " . $tanggal_lahir. "<br>";
    echo "Agama : " . $agama. "<br>";
    echo "Alamat : " . $alamat. "<br>";
    echo "Hobi : " . $hobi. "<br>";
}

biodata("Syifa", "Wanita", "24 September", "Islam", "Kp. Bojong Koneng");

?>
