<?php

$gaji = 4500000;
$pajak = 112500;
$bpjs = 200000;
$infak = 50000;

$jgaji = $pajak+$bpjs+$infak; 
$plus = 10000*24;
$total = $gaji-$jgaji;
$hasil = $total+$plus;

echo "Gaji kotor : Rp." . $gaji . "<br>";
echo "Potongan pajak(2.5%) : Rp." . $pajak . "<br>";
echo "Potongan bpjs : Rp." . $bpjs . "<br>";
echo "Potongan infak : Rp." . $infak . "<br>";
echo "Tunjangan transportasi : Rp." . $plus . "<br>";
echo "Potongan : Rp." . $total . "<br>";
echo "Gaji akhir: Rp." . $hasil . "<br>";



?>