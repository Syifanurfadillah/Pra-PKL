<?php
$mobil = array(   
    array(
	"merk" 	=> "Avanza", 
        "tahun" => '2019', 
        "warna" => 'Hitam' 
    ),   
    array(
	"merk" 	=> "Xenia",
        "tahun" => '2005', 
        "warna" => 'Putih'
    )
); 
foreach($mobil as $value) { 
    echo $value['merk']. " ".$value['tahun']." ".$value['warna']."<br><br>";  
} 
      
?> 