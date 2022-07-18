<?php

// Bagian Top : 
// Jawa Barat
// DKI Jakarta
// DI Yogyakarta
// Bagian Bottom : 
// Sumatera Barat
// Aceh

$provinsi = array(
    "Aceh" => "11", 
    "Sumatera Barat" => "13",
    "DKI Jakarta" => "31", 
    "Jawa Barat" => "32",
    "DI Yogyakarta" => "34"
);

// Looping array menggunakan FOREACH
echo "<h2> Provinsi dari foreach : </h2>";
foreach ($provinsi as $val => $val_value){
    echo "<i>ID : " . $val_value . "</i> <br> <b> Provinsi : " . $val . "</b><br>";
} 

echo "<br>";
echo "<b>Top dan bottom Provinsi di dalam array assosiative</b>";
echo "<br>";
echo "<br>";

$provin = array(
    'DIA' => 'Aceh',
    'SUMBAR' => 'Sumatera Barat',
    'DKI' => 'DKI Jakarta',
    'JABAR' => 'Jawa Barat',
    'DI' => 'DI Yogyakarta',
);


print "Original\n";
print_r($provin);
print "<br>";
print "<br>";

// Bagian Top : 
// Jawa Barat
// DKI Jakarta
// DI Yogyakarta
// Bagian Bottom : 
// Sumatera Barat
// Aceh

print "Move Jawa Barat to the top\n";
move_to_top($provin, 'JABAR');
print_r($provin);
print "<br>";
print "<br>";

print "Move DKI Jakarta to the top\n";
move_to_top($provin, 'DKI');
print_r($provin);
print "<br>";
print "<br>";

print "Move DI Yogyakarta to the top\n";
move_to_top($provin, 'DI');
print_r($provin);
print "<br>";
print "<br>";

print "Move Sumatera Barat to the bottom\n";
move_to_bottom($provin, 'SUMBAR');
print_r($provin);
print "<br>";
print "<br>";

print "Move Aceh to the bottom\n";
move_to_bottom($provin, 'DIA');
print_r($provin);
print "<br>";
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