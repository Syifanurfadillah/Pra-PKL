<?php

// // $artikel = [
// //     "judul" => "Belajar Pemrograman PHP",
// //     "penulis" => "petanikode",
// //     "view" => 128,
// // ];

// echo "<h2>" . $artikel["judul"] . "</h2>";
// echo "<p> Penulis</p>" . $artikel["penulis"] . "</p>";
// echo "<p> View" . $artikel["view"] . "</p>";

$artikel = [[
    "kategori" => "Olahraga",
    "waktu" => "Jumat(11/02/2022)",
    "judul" => "Hari Ini Persib Bandung akan menghadapi PSS Sleman",
    "view" => "Suara.com -PSS Sleman akan melakoni misi berat melawan Persib Bandung dalam pekan ke-24 BRI Liga 1<br>
     2021/2022 di Stadion Kapten 1 Wayan Dipta,Gianyar,Bali,Jumat(11/02/2022)",
],
   [ "kategori" => "Olahraga",
    "waktu" => "Sabtu(31/07/2021)",
    "judul" => "Pencapaian Ganda Putri Indonesia di Olimpiade dari Masa ke Masa",
    "view" => "Kompas.com -Pasangan pebulu tangkis ganda putri Indonesia, Greysia Polii/Apriyani Rahayu melangkah ke final nomor ganda putri cabang olahraga bulu tangkis Olimpiade Tokyo 2020.<br>
     Sabtu(27/7/2021)",
],
    ["kategori" => "Olahraga",
    "waktu" => "Senin(27/09/2021)",
    "judul" => "Hasil Piala Sudirman 2021, tim bulu tangkis Indonesia mengawali start sempurna",
    "view" => "Kompaas.com -Hasil tim bulu tangkis Indonesia di Piala Sudirman 2021 sangat memuaskan. Tim bulu tangkis Indonesia mendapat hasil sempurna di babak awal Piala Sudirman 2021.
    Indonesia mengawali pertandingan perdana di Grup C Piala Sudirman menghadapi Rusia dengan mengirimkan wakil Anthony Sinisuka Ginting di tunggal putra.
     Hasil pertandingan Anthony di Piala Sudirman 2021 adalah 21-8, 21-8 melawan Ivan Sozonov.<br>
     Senin(27/09/2021)",
],
    ["kategori" => "Olahraga",
    "waktu" => "Jumat(15/10/2021)",
    "judul" => "Beberapa Cabang Lomba Orsenik yang Berpotensi Digelar Secara Offline",
    "view" => "detik.com -Dari cabang olahraga, ada 8 lomba yang diajukan untuk dilaksanakan secara offline. Setelah diadakan audiensi, hanya 1 lomba yang masih dipertimbangkan, yaitu bola basket.
    <br>
     Jumat(15/10/2021)",
],
    ["kategori" => "Olahraga",
    "waktu" => "Selasa(27/05/2021)",
    "judul" => "Manfaat Menakjubkan Olahraga Voli bagi Kesehatan dan Kebugaran Tubuh",
    "view" => "Hellosehat.com -beberapa manfaat kesehatan yang bisa Anda dapatkan saat bermain bola voli: Mengurangi stres,Membuat tidur lebih nyenyak,Membantu menurunkan berat badan,
      Membentuk otot dan persendian, dll<br>
      Jumat(11/05/2021)",
]];


foreach($artikel as $data){
  echo "Kategori : " . $data["kategori"] . "<br>";
  echo "<h2>" . $data["judul"] . "</h2>";
  echo "<p>" . $data["view"] . "</p>";
  echo "Tanggal : " . $data["waktu"] . "<br>";

  echo "<hr/>";

}