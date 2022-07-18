<?php
  $nama_orng = array(
   array ("Nama" => "Ujang Betok",
           "Kelas" => "RPL 1",
           "Alamat" => "Bandung",
           "Jenis Kelamin" => "Laki - laki",
           "Tanggal Lahir" => "11 Januari 2004"
    ),
    array ("Nama" => "Marco Mambo",
           "Kelas" => "RPL 2",
           "Alamat" => "Jakarta",
           "Jenis Kelamin" => "Laki - laki",
           "Tanggal Lahir" => "26 juli 2003"
    ),
    array ("Nama" => "Asep Axis",
           "Kelas" => "RPL 3 ",
           "Alamat" => "Ciwidey",
           "Jenis Kelamin" => "Laki - laki",
           "Tanggal Lahir" => "13 April 2003"
    ),
    array ("Nama" => "Neti Putri",
           "Kelas" => "RPL 1",
           "Alamat" => "Cijerah",
           "Jenis Kelamin" => "Perempuan",
           "Tanggal Lahir" => "1 Desember 2002"
    ),
    array ("Nama" => "Ucup",
           "Kelas" => "RPL 3",
           "Alamat" => "Citepus",
           "Jenis Kelamin" => "Laki - laki",
           "Tanggal Lahir" => "2 Februari 2004"
    ),
    array ("Nama" => "Junaedi",
           "Kelas" => "RPL 2",
           "Alamat" => "Bojong Koneng",
           "Jenis Kelamin" => "Laki - laki",
           "Tanggal Lahir" => "14 Januari 2000"
    ),
  );

//   looping
echo "<h2>Biodata</h2><br>";
foreach ($nama_orng as $data){
    echo "Nama :" . $data['Nama'] . "<br>";
    echo "Kelas :" . $data['Kelas'] . "<br>";
    echo "Alamat :" . $data['Alamat'] . "<br>";
    echo "Jenis Kelamin :" . $data['Jenis Kelamin'] . "<br>";
    echo "Tanggal Lahir :" . $data['Tanggal Lahir'];
    echo "<br>";
    echo "<hr/>";
    }
    
?>