<?php

function Penjumlahan(){

    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 + $angka2;

    echo "<h3>Penjumlahan</h3>";
    echo "Angka pertama : " .$angka1."<br>";
    echo "Angka kedua : " .$angka2."<br>";
    echo "Hasilnya : ".$jumlah;
}

function Pengurangan(){

    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 - $angka2;

    echo "<h3>Pengurangan</h3>";
    echo "Angka pertama : " .$angka1."<br>";
    echo "Angka kedua : " .$angka2."<br>";
    echo "Hasilnya : ".$jumlah;
}

function Perkalian(){

    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 * $angka2;

    echo "<h3>Perkalian</h3>";
    echo "Angka pertama : " .$angka1."<br>";
    echo "Angka kedua : " .$angka2."<br>";
    echo "Hasilnya : ".$jumlah;
}

function Pembagian(){

    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 / $angka2;

    echo "<h3>Pembagian</h3>";
    echo "Angka pertama : " .$angka1."<br>";
    echo "Angka kedua : " .$angka2."<br>";
    echo "Hasilnya : ".$jumlah;
}

Penjumlahan();
echo "<hr>";
Pengurangan();
echo "<hr>";
Perkalian();
echo "<hr>";
Pembagian();

?>