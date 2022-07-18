<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $jenis_kelamin = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita-cita'];
    $bijak = $_POST['bijak'];

    echo"========== BIODATA DIRI ==========<br>";
    echo"=================================<br>";
    echo"Nama         = $nama <br>";
    echo"Tempat lahir = $tempat_lahir <br>";
    echo"Tanggal lahir = $tanggal_lahir <br>";
    echo"Jenis Kelamin = $jenis_kelamin <br>";
    echo"Agama = $agama <br>";
    echo"alamat = $alamat <br>";
    echo"Pendidikan Terakhir = $pendidikan <br>";
    echo"Status = $status <br>";
    echo"Hobi = $hobi <br>";
    echo"Cita-Cita = $cita_cita <br>";
    echo"Kata-Kata Bijak = $bijak <br>";
}