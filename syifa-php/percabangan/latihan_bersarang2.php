<?php

$jenis = "Makanan";
$menu = "Nasi Goreng";
$jumlah = 7;
$diskon = 0;


if ($jenis == "Makanan"){
    $nasi_goreng = 10000;
    $nj = $jumlah * $nasi_goreng;
    $diskon = $nj * 0.2;
    if ($menu == "Nasi Goreng"){
    echo "Jenis Pesanan : " . $jenis . "<br>";
    echo "Nama Pesanan : " . $menu. "<br>";
    echo "Jumlah : " . $jumlah. "<br>";
    echo "Total : " . $nj. "<br>";
    if ($nj >= 50000){
    $bs = $nj - $diskon;
    echo "Diskon 20% : ". $diskon ."<br>";
    echo "Total Bayar : " . $bs. "<br>";
        }
    else {
        echo "Karna anda tidak belanja lebih dari 50000," . "<br>";
        echo "anda tidak mendapat diskon.";
    }
    }

        $mie_goreng = 15000;
        $mj = $jumlah * $mie_goreng;
        if ($menu == "Mie Goreng"){
        echo "Jenis Pesanan : " . $jenis . "<br>";
        echo "Nama Pesanan : " . $menu. "<br>";
        echo "Jumlah : " . $jumlah. "<br>";
        echo "Total : " . $mj. "<br>";
        if ($mj >= 50000){
        $br = $mj * 0.2;
        $q = $mj - $br;
        echo "Diskon 20% : ".$br. "<br>";
        echo "Total Bayar : " . $q. "<br>";
        }
        else {
            echo "Karna anda tidak belanja lebih dari 50000," . "<br>";
            echo "anda tidak mendapat diskon.";
        }
    
        }

        $ayam_goreng = 20000;
        $aj = $jumlah * $ayam_goreng;
         if ($menu == "Ayam Goreng"){
        echo "Jenis Pesanan : " . $jenis . "<br>";
        echo "Nama Pesanan : " . $menu. "<br>";
        echo "Jumlah : " . $jumlah. "<br>";
        echo "Total : " . $aj. "<br>";
        if ($aj >= 50000){
        $bp = $aj * 0.2;
        $nm = $aj - $bp;
        echo "Diskon 20% : ". $bp. "<br>";
        echo "Total Bayar : " . $nm. "<br>";
        }
        else {
            echo "Karna anda tidak belanja lebih dari 50000," . "<br>";
            echo "anda tidak mendapat diskon.";
        }
    
        }


}

else if ($jenis == "Minuman"){
        $air_mineral = 5000;
        $wa = $jumlah * $air_mineral;
        $dk = $wa * 0.2;
        if ($menu == "Air Mineral"){
        echo "Jenis Pesanan : " . $jenis . "<br>";
        echo "Nama Pesanan : " . $menu. "<br>";
        echo "Jumlah : " . $jumlah. "<br>";
        echo "Total : " . $wa. "<br>";
        if ($wa >= 50000){
        $ws = $wa - $dk;

        echo "Diskon 20% : ". $dk ."<br>";
        echo "Total Bayar : " . $ws. "<br>";
            }
        else {
            echo "Karna anda tidak belanja lebih dari 50000," . "<br>";
            echo "anda tidak mendapat diskon.";
        }
        }

        $fresh_tea = 7000;
        $r = $jumlah * $fresh_tea;
        $dis = $r * 0.2;
         if ($menu == "Fresh Tea"){
        echo "Jenis Pesanan : " . $jenis . "<br>";
        echo "Nama Pesanan : " . $menu. "<br>";
        echo "Jumlah : " . $jumlah. "<br>";
        echo "Total : " . $r. "<br>";
        if ($r >= 50000){
        $d = $r - $dis;
        echo "Diskon 20% : ". $dis . "<br>";
        echo "Total Bayar : " . $d. "<br>";
            }
        else {
            echo "Karna anda tidak belanja lebih dari 50000," . "<br>";
            echo "anda tidak mendapat diskon.";
        }
        }

        $jus = 12000;
        $l = $jumlah * $jus;
        $disk = $l * 0.2;
         if ($menu == "Jus"){
        echo "Jenis Pesanan : " . $jenis . "<br>";
        echo "Nama Pesanan : " . $menu. "<br>";
        echo "Jumlah : " . $jumlah. "<br>";
        echo "Total : " . $l. "<br>";
        if ($l >= 50000){
        $k = $l - $disk;
        echo "Diskon 20% : ". $disk. "<br>";
        echo "Total Bayar : " . $k. "<br>";
            }
        else {
            echo "Karna anda tidak belanja lebih dari 50000," . "<br>";
            echo "anda tidak mendapat diskon.";
        }
        }
}


?>