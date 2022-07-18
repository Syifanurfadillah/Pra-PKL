<?php

$kelas = "XII";
$nilai = "90";

if($kelas == "X"){

    if ($nilai >=75 && $nilai <=100){
        echo "Selamat Anda Lulus !";
    }

    else{
        echo "Selamat Anda Tidak Lulus !";
    }
}

else if($kelas == "XI"){

    if ($nilai >=78 && $nilai <=100){
        echo "Selamat Anda Lulus !";
    }

    else {
        echo "Selamat Anda Tidak Lulus !";
    }
}

else if($kelas == "XII"){

     if ($nilai >=80 && $nilai <=100){
        echo "Selamat Anda Lulus !";
    }
    else {
        echo "Selamat Anda Tidak Lulus !";
    }
}

?>