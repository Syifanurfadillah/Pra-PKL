<?php
// membuat array asosiatif
$artikel = [
    "ktg" => "Olahraga",
    "tema" => "Pertandingan sepak bola",
    "judul" => "Pencapaian Ganda Putri Indonesia di Olimpiade dari Masa ke Masa",
    "artikel" => "Kompas.com -Pasangan pebulu tangkis ganda putri Indonesia, Greysia Polii/Apriyani Rahayu melangkah ke final nomor ganda putri cabang olahraga bulu tangkis Olimpiade Tokyo 2020.",
    "g" => "2021/2022,lapangan bulu tangkis patra,jakarta,Sabtu(31/07/2021)",
    "tgl" => "Sabtu(31/07/2021)"
];

// mencetak isi array assosiatif
echo "<hr>";
echo "<p><b>Kategori : ".$artikel["ktg"]."</b></p>";
echo "<p><b>Tema &nbsp;&nbsp;&nbsp;&nbsp;:".$artikel["tema"]."</b></p>";
echo "<p><b>Judul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$artikel["judul"]."</b></p>";
echo "<p><b>Artikel &nbsp;&nbsp;&nbsp;: ".$artikel["artikel"]."</b></p>";
echo "<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$artikel["g"]."</b></p>";
echo "<p><b> Tanggal &nbsp; : " .$artikel["tgl"]."</b></p>";
echo "<hr>";
?>