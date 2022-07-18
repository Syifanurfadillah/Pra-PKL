<?php


class bangunDatar{

    public $luas;

    function persegi($sisi){

        $this->luas = $sisi * $sisi;
    
      echo "<h3>Menghitung Luas persegi </h3>";
      echo "Rumus Luas Persegi : Sisi x Sisi <br>";
      echo "Sisi : ". $sisi. "<br>";
      echo "Hasil : ". $this->luas; 
      echo "<hr>";
      
    }
    
    function persegi_panjang($panjang, $lebar){
        
        echo "<h3>Menghitung Luas Persegi Panjang</h3>";
        echo "Rumus Luas Persegi Panjang : Panjang x Lebar <br>";
        echo "Panjang : ". $panjang. "<br>";
        echo "Lebar : ". $lebar. "<br>";
        echo "Hasil : ". $panjang * $lebar;
        echo "<hr>";

    }

    function segitiga($alas, $tinggi){
        

        echo "<h3>Menghitung Luas Segitiga</h3>";
        echo "Rumus Luas Segitiga : 1/2 x Alas x Tinggi <br>";
        echo "Alas : ". $alas. "<br>";
        echo "Tinggi : ". $tinggi. "<br>";
        echo "Hasil : ". 0.5* $alas * $tinggi;
        echo "<hr>";

    }

    function lingkaran($ruas){
        
        echo "<h3>Menghitung Luas Lingkaran</h3>";
        echo "Rumus Luas Segitiga : 3.14 x Jari-jari x Jari-jari <br>";
        echo "Jari-Jari : ". $ruas. "<br>";
        echo "Hasil : ". 3.14 * $ruas * $ruas;
        echo "<hr>";
    }

    function jajarGenjang($alas, $tinggi){
        
        echo "<h3>Menghitung Luas Jajar Genjang</h3>";
        echo "Rumus Luas Jajar Genjang : Alas x Tinggi <br>";
        echo "Alas : ". $alas. "<br>";
        echo "Tinggi : ". $tinggi. "<br>";
        echo "Hasil : ". $alas * $tinggi;
        echo "<hr>";
    }

    

}

$cetak = new bangunDatar();

echo $cetak->persegi(5);
echo "<br>";
echo $cetak->persegi_panjang(5, 25);
echo "<br>";
echo $cetak->segitiga(25, 5);
echo "<br>";
echo $cetak->lingkaran(10);
echo "<br>";
echo $cetak->jajarGenjang(10, 8);




?>