<?php
class karyawan extends Database{
    //menampilkan data karyawan  ke index.php
    public function index(){
        $datakaryawan = mysqli_query($this->koneksi, "select * from karyawan");
        return $datakaryawan;
    }

    public function create($nama,$jabatan,$pendidikan,$bpjs)
    {
        mysqli_query($this->koneksi,"insert into karyawan values (null,'$nama','$jabatan','$pendidikan','$bpjs')");

    }

    // memilih data karyawan yang akan diubah
    public function edit($id)
    {
        $datakaryawan = mysqli_query($this->koneksi, 
                    "select * from karyawan where id='$id'"
                );

        return $datakaryawan;
    }
    // merubah data karyawan 
    public function update($id,$nama,$jabatan,$pendidikan,$bpjs)
    {
        mysqli_query(
            $this->koneksi,
            "update karyawan set nama='$nama', jabatan='$jabatan', pendidikan='$pendidikan', bpjs='$bpjs' where id='$id'"
        );
    }

    // menampilkan data karyawan berdasarkan id
    public function show($id)
    {
        $datakaryawan = mysqli_query($this->koneksi, 
                    "select * from karyawan  where id='$id'");

        return $datakaryawan;
    }

    // menghapus data karyawan 
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from karyawan where id='$id'"
                );

    }

}
?>