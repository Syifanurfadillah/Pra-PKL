<?php


class contoh{
    public function __destruct(){
        echo "Ini Adalah Method Destruct";

    }

    public function aaaaa(){
        echo "Hallo Dunia";
    }

    public function bbbbb(){
        echo "Hallo Dunia2";
    }

    public function __construct(){
        echo "Ini Adalah Construct";
    }

}

$cetak = new contoh();
echo "<br>";
echo $cetak->aaaaa();
echo "<br>";
echo $cetak-> bbbbb();
echo "<br>";



?>
