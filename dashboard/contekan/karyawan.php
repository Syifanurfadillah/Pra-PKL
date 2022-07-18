<?php
class karyawan extends Database{
    //menampilkan data karyawan  ke index.php
    public function index(){
        $datapenggajian = mysqli_query($this->koneksi, "select * from penggajian");
        return $datapenggajian;
    }

    public function create($nama,$jabatan,$pendidikan,$bpjs)
    {
        mysqli_query($this->koneksi,"insert into penggajian values (null,'$nama','$jabatan','$pendidikan','$bpjs')");

    }

    // memilih data karyawan yang akan diubah
    public function edit($id)
    {
        $datapenggajian = mysqli_query($this->koneksi, 
                    "select * from penggajian where id='$id'"
                );

        return $datapenggajian;
    }
    // merubah data karyawan 
    public function update($id,$nama,$jabatan,$pendidikan,$bpjs)
    {
        mysqli_query(
            $this->koneksi,
            "update penggajian set nama='$nama', jabatan='$jabatan', pendidikan='$pendidikan', bpjs='$bpjs' where id='$id'"
        );
    }

    // menampilkan data karyawan berdasarkan id
    public function show($id)
    {
        $datapenggajian = mysqli_query($this->koneksi, 
                    "select * from penggajian  where id='$id'");

        return $datapenggajian;
    }

    // menghapus data karyawan 
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from penggajian where id='$id'"
                );

    }

}
?>