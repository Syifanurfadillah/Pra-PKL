<?php


function dataDiri($nama, $jenis_kelamin){

    echo "Nama : ".$nama."<br>";
    echo "Jenis Kelamin : ".$jenis_kelamin."<br>";
}

function kelas($jurusan, $kelas){

    echo dataDiri("Rahman Pablo", "Pria");
    echo "Jurusan : ".$jurusan."<br>";
    echo "Kelas : ".$kelas."<br>";
}

kelas("Rekayasa Perangkat Lunak", "XI RPL 1");


?>