<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array(
    "Kopi" => "pait",
    "Teh"  => "Manis", 
    "Jus Jeruk" => "Asam");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

echo $minuman['Kopi'] . "<br>";
echo $makanan[1];

$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

// cara mengakses isinya
echo $matrik[1][0];

?>