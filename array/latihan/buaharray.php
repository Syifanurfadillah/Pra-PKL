<?php
$buah = array(   
    "01. Sirsak" => array(             //01
		"Warna" => "Hijau", 
        "Rasa" => 'asam', 
        "bentuk" => 'Bulat atau lonjong' 
    ),   
    "02. Manggis" => array(           //02
		"Warna" => "Ungu kehitaman", 
        "Rasa" => 'Manis', 
        "bentuk" => 'Bulat' 
    ),   
    "03. Mangga" => array(            //03
		"Warna" => "Kuning keemasan", 
        "Rasa" => 'Manis', 
        "bentuk" => 'Bulat sedikit lonjong' 
    ),
    "04. Jambu" => array(              //04
		"Warna" => "Hijau", 
        "Rasa" => 'Manis', 
        "bentuk" => 'Bulat' 
    ),
    "05. Pisang" => array(             //05
		"Warna" => "Kuning", 
        "Rasa" => 'Kecut', 
        "bentuk" => 'Lonjong' 
    ),
    "06. Apel" => array(              //06
		"Warna" => "Merah", 
        "Rasa" => 'Manis', 
        "bentuk" => 'Bulat' 
    ),
    "07. Pepaya" => array(             //07
		"Warna" => "Kuning", 
        "Rasa" => 'manis', 
        "bentuk" => 'Lonjong' 
    ),
    "08. Nanas" => array(              //08
		"Warna" => "Kuning", 
        "Rasa" => 'Asam', 
        "bentuk" => 'Bulat sedikit lonjong' 
    ),
    "09. Anggur" => array(             //09
		"Warna" => "Ungu kehitaman", 
        "Rasa" => 'Manis', 
        "bentuk" => 'Bulat' 
    ),
    "10. Rambutan" => array(          //10
		"Warna" => "Merah", 
        "Rasa" => 'Manis', 
        "bentuk" => 'Bulat' 
    ),
); 
$size = count($buah);
$keys = array_keys($buah);
echo "<h1>10 Buah-buahan</h1>";
for($i = 0; $i < $size; $i++)
{
    echo "<hr width='300px' align='left'><h3>". $keys[$i]. "</h3>";
    foreach($buah[$keys[$i]] as $key => $value) {
        echo "<i>" . $key . " : " . $value . "</i><br>";
    }
    echo "<br>";
}