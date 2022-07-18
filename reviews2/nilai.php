<?php

echo "<br>";
echo "<h2>Cetak Nilai Siswa</h2>";

$nama = ["Doni", "Didi", "Reza"];

$matrik = [
    [90, 65, 65],
    [90, 78, 78],
    [78, 90, 90],
];

echo "Nilai " . $nama[0] . " dalam mata pelajaran Fisika : " . $matrik[0][0];
echo "<br>";
echo "Nilai " . $nama[0]. " dalam mata pelajaran Matematika : " . $matrik[0][1];
echo "<br>";
echo "Nilai ".$nama[0]. " dalam mata pelajaran Kimia : " . $matrik[0][2];
echo "<br>";
echo "Nilai ".$nama[1]. " dalam mata pelajaran Fisika : " . $matrik[1][0];
echo "<br>";
echo "Nilai " .$nama[1]. " dalam mata pelajaran Matematika : " . $matrik[1][1];
echo "<br>";
echo "Nilai ".$nama[1]." dalam mata pelajaran Kimia : " . $matrik[1][2];
echo "<br>";
echo "Nilai ".$nama[2]." dalam mata pelajaran Fisika : " . $matrik[2][0];
echo "<br>";
echo "Nilai ".$nama[2]." dalam mata pelajaran Matematika : " . $matrik[2][1];
echo "<br>";
echo "Nilai ".$nama[2]." dalam mata pelajaran Kimia : " . $matrik[2][2];

// cara mengakses isinya
// echo $matrik[1][0];

?>