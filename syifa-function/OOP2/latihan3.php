<?php

class penggajihan{
    private $pokok;
    private $tunjangan; 

    public function gajiPokok($nama, $jabatan){
        echo "<h3>Gaji Pokok</h3>";
        echo "Nama Karyawan : " .$nama. "<br>";
        echo "Jabatan : " .$jabatan. "<br>";
        if ($jabatan == "Direktur"){
            $this->pokok=100000000;
        }
    
        else if ($jabatan == "Manager"){
            $this->pokok=7500000;
        }
    
        else if ($jabatan == "Karyawan"){
            $this->pokok=5000000;
        }
    
        else if($jabatan == "OB"){
            $this->pokok=2500000;
        }
        echo "Gaji Pokok : " . $this->pokok . "<br>";
        

    }

    public function tunjangan($pendidikan){
        echo "<h3>Tunjangan</h3>";
        echo "Pendidikan : " .$pendidikan. "<br>";
        if ($pendidikan == "S1"){
            $this->tunjangan=1000000;
        }
    
        else if ($pendidikan == "SMK"){
            $this->tunjangan=750000;
        }
    
        else if ($pendidikan == "SMP"){
            $this->tunjangan=500000;
        }
    
        else if($pendidikan == "SD"){
            $this->tunjangan=250000;
        }
        echo "Tunjangan Pendidikan: " . $this->tunjangan . "<br>";

    }

    public function potongan($tabungan, $pinjaman){
        echo "<h3>Potongan</h3>";
        $this->total = $tabungan + $pinjaman;
        echo "Tabungan : " . $tabungan . "<br>";
        echo "Pinjaman : " . $pinjaman . "<br>";
        echo "Total Potongan : " . $this->total . "<br>";
    }

    public function gajiBersih(){
        echo "<h3>Total Gaji Bersih</h3>";
        $this->hasil = $this->pokok + $this->tunjangan;
        $this->akhir = $this->hasil - $this->total;
        echo "Total Gaji Bersih : " . $this->akhir . "<br>";
    }

    
}

$cetak = new penggajihan();

echo $cetak->gajiPokok("Syifa", "Karyawan");
echo "<hr>";
echo $cetak->tunjangan("SMK");
echo "<hr>";
echo $cetak->potongan(200000, 50000);
echo "<hr>";
echo $cetak->gajiBersih();



?>