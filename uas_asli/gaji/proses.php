<?php
include '../database.php';
$karyawan = new karyawan();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $bpjs = $_POST['bpjs'];

    if ($aksi == "create"){
        $karyawan->create($nama,$jabatan,$pendidikan,$bpjs);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $karyawan->update($id, $nama, $jabatan, $pendidikan, $bpjs);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $karyawan->delete($id);
        header("location:index.php");
    }
}
?>