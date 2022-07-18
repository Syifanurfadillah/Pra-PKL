<?php
class gaji extends Database{
    //menampilkan data gaji  ke index.php
    public function index(){
        $datagaji = mysqli_query($this->koneksi, "select * from data_gaji");
        return $datagaji;
    }

    public function create($nama,$jabatan,$pendidikan,$bpjs)
    {
        mysqli_query($this->koneksi,"insert into data_gaji values (null,'$nama','$jabatan','$pendidikan','$bpjs')");

    }

    // memilih data gaji yang akan diubah
    public function edit($no)
    {
        $datagaji = mysqli_query($this->koneksi, 
                    "select * from data_gaji where no='$no'"
                );

        return $datagaji;
    }
    // merubah data gaji 
    public function update($no,$nama,$jabatan,$pendidikan,$bpjs)
    {
        mysqli_query(
            $this->koneksi,
            "update data_gaji set nama='$nama', jabatan='$jabatan', pendidikan='$pendidikan', bpjs='$bpjs' where no='$no'"
        );
    }

    // menampilkan data gaji berdasarkan no
    public function show($no)
    {
        $datagaji = mysqli_query($this->koneksi, 
                    "select * from data_gaji  where no='$no'");

        return $datagaji;
    }

    // menghapus data gaji 
    public function delete($no)
    {
        mysqli_query($this->koneksi, "delete from data_gaji where no='$no'"
                );

    }

}
?>