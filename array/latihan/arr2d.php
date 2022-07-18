<?php
    $nama_orng = array(   
        "Biodata" => array(             //01
            "Nama" => "Ujang Betok", 
            "Kelas" => 'RPL 1', 
            "Alamat" => 'Bandung',
            "Jenis Kelamin" => "Laki-laki",
            "Tanggal Lahir"  => "2004-09-15"
        ),   
        "Biodata" => array(             //01
            "Nama" => "Marco Mambo", 
            "Kelas" => 'RPL 2', 
            "Alamat" => 'Bojong Koneng',
            "Jenis Kelamin" => "Laki-laki",
            "Tanggal Lahir"  => "2003-01-11"
        ),   
        "Biodata" => array(             //01
            "Nama" => "Junaedi", 
            "Kelas" => 'RPL 1', 
            "Alamat" => 'Bojong Citepus',
            "Jenis Kelamin" => "Laki-laki",
            "Tanggal Lahir"  => "2004-02-12"
        ),   
        "Biodata" => array(             //01
            "Nama" => "Ucup", 
            "Kelas" => 'RPL 1', 
            "Alamat" => 'Palasari',
            "Jenis Kelamin" => "Laki-laki",
            "Tanggal Lahir"  => "2004-06-21"
        ),   
        "Biodata" => array(             //01
            "Nama" => "Asep Axis", 
            "Kelas" => 'RPL 3', 
            "Alamat" => 'Ciwidey',
            "Jenis Kelamin" => "Laki-laki",
            "Tanggal Lahir"  => "2004-08-17"
        ),   
        "Biodata" => array(             //01
            "Nama" => "Neti", 
            "Kelas" => 'RPL 1', 
            "Alamat" => 'Depok',
            "Jenis Kelamin" => "Perempuan",
            "Tanggal Lahir"  => "2004-08-17"
        ),   
    ); 
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