<?php

// Membuat array associative
$nama_buah = array("Pepaya" => "Pepaya", "Nangka" => "Nangka",
                "Semangka" => "Semangka", "Durian" => "Durian",
                "Pisang" => "Pisang");

// Looping array menggunakan FOREACH
echo "<h2> Looping menggunakan foreach : </h2>";
foreach ($nama_buah as $val => $val_value){
    echo "<b>elemen : " . $val . "</b> <i> Value : " . $val_value . "</i><br>";
} 

// Looping array menggunakan FOR

$nama_orang["rani"] = "rani";
$nama_orang["devi"] = "devi";
$nama_orang["yuli"] = "yuli";
$nama_orang["andin"] = "andin";
$nama_orang["desi"] = "desi";

echo "<h2>Looping menggunakan for: </h2>";
$keys = array_keys($nama_orang);
$round = count($nama_orang);

for($i = 0; $i <$round; ++$i){
    echo "<b>elemen :" . $keys[$i] . "</b> <i> value : " . $nama_orang[$keys[$i]] . "</i><br>";
}

echo "<br>";
echo "<b>Penggunaan top dan bottom di dalam array assosiative</b>";
echo "<br>";

$countries = array(
    'CAD' => 'Canada',
    'TWN' => 'Taiwan',
    'USA' => 'United States',
    'GBR' => 'United Kindom',
    'GER' => 'Germany',
);

print "Original\n";
print_r($countries);
print "<br>";

print "Move Taiwan to the top\n";
move_to_top($countries, 'TWN');
print_r($countries);
print "<br>";

print "Move United States to the bottom\n";
move_to_bottom($countries, 'USA');
print_r($countries);
print "<br>";

function move_to_top(&$array, $key)
{
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}
print "<br>";

function move_to_bottom(&$array, $key)
{
    $value = $array[$key];
    unset($array[$key]);
    $array[$key] = $value;
}
print "<br>";


?>