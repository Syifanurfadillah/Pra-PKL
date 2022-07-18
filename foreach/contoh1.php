<?php



$artikel = [
    "kategori" => "Olahraga",
    "waktu" => "Jumat(11/2/2022)",
    "judul" => "Hari Ini Persib Bandung akan menghadapi PSS Sleman",
    "view" => "Suara.com -PSS Sleman akan melakoni misi berat melawan Persib Bandung dalam pekan ke-24 BRI Liga 1<br>
     2021/2022 di Stadion Kapten 1 Wayan Dipta,Gianyar,Bali,Jumat(11/2/2022)",
];

echo "Kategori : " . $artikel["kategori"] . "<br><br>";
echo "Tanggal : " . $artikel["waktu"] . "<br><br><br>";
echo "<h2>" . $artikel["judul"] . "</h2>";
echo "<p>" . $artikel["view"] . "</p>";
echo "<hr/>";