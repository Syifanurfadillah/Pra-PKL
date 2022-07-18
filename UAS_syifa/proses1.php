<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelas = $_POST['kelas'];

    echo"========== BIODATA DIRI ==========<br>";
    echo"=================================<br>";
    echo"Nama         = $nama <br>";
    echo"Tempat lahir = $tempat_lahir <br>";
    echo"Tanggal lahir = $tanggal_lahir <br>";
    echo"Kelas = $kelas <br>";
}
?>