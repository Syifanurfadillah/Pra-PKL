<?php
   class Database{
       public $host = "localhost", $user = "root", $pass = "", $db="gaji";
       public $koneksi;

       public function __construct()
       {
           $this->koneksi = mysqli_connect(
               $this->host,
               $this->user,
               $this->pass,
               $this->db
           );
           if($this->koneksi){
               // echo"berhasil";
           }
           else
           {
               echo"Koneksi Data Gagal";
           }
       }
   }
   $db = new Database();

   include 'dosen.php';
?>
   