<!-- PHP -->
     
<div class="container">
  <center>
  <br>
  <div class="card" style="width: 25rem;">
  <div class="card-body">

  <?php
  if (isset($_POST ['simpan'])){
      $jam = $_POST ['jam'];
      $gol = $_POST ['golongan'];
     

    if($gol == "A"){
      $gaji = $jam * 4000;
    
    echo "<font face=Times New Roman><p align=center>Sistem Penggajian 
    berdasarkan golongan karyawan</p></font>";
    echo "<p align=left>";
    echo "<font face=Times New Roman>Jam Kerja anda : </font>" . $jam . " Jam";
    echo "<br>";
    echo "<font face=Times New Roman align=left>Golongan Kerja : </font>" . $gol;
    echo "<br>";
    echo "<font face=Times New Roman>Gaji Anda Adalah : </font>". $gaji;
    echo "<p>";
  }

  elseif($gol == "B"){
    $gaji = $jam * 5000;
    echo "<font face=Times New Roman><p align=center>Sistem Penggajian 
    berdasarkan golongan karyawan</p></font>";
    echo "<p align=left>";
    echo "<font face=Times New Roman>Jam Kerja anda : </font>" . $jam . " Jam";
    echo "<br>";
    echo "<font face=Times New Roman align=left>Golongan Kerja : </font>" . $gol;
    echo "<br>";
    echo "<font face=Times New Roman>Gaji Anda Adalah : </font>". $gaji;
    echo "<p>";
  }

  elseif($gol == "C"){
    $gaji = $jam * 6000;
    echo "<font face=Times New Roman><p align=center>Sistem Penggajian 
    berdasarkan golongan karyawan</p></font>";
    echo "<p align=left>";
    echo "<font face=Times New Roman>Jam Kerja anda : </font>" . $jam . " Jam";
    echo "<br>";
    echo "<font face=Times New Roman align=left>Golongan Kerja : </font>" . $gol;
    echo "<br>";
    echo "<font face=Times New Roman>Gaji Anda Adalah : </font>". $gaji;
    echo "<p>";
  }

  elseif($gol == "C"){
    $gaji = $jam * 6000;
    echo "<font face=Times New Roman><p align=center>Sistem Penggajian 
    berdasarkan golongan karyawan</p></font>";
    echo "<p align=left>";
    echo "<font face=Times New Roman>Jam Kerja anda : </font>" . $jam . " Jam";
    echo "<br>";
    echo "<font face=Times New Roman align=left>Golongan Kerja : </font>" . $gol;
    echo "<br>";
    echo "<font face=Times New Roman>Gaji Anda Adalah : </font>". $gaji;
    echo "<p>";
  }

  elseif($gol == "D"){
    $gaji = $jam * 7000;
    echo "<font face=Times New Roman><p align=center>Sistem Penggajian 
    berdasarkan golongan karyawan</p></font>";
    echo "<p align=left>";
    echo "<font face=Times New Roman>Jam Kerja anda : </font>" . $jam . " Jam";
    echo "<br>";
    echo "<font face=Times New Roman align=left>Golongan Kerja : </font>" . $gol;
    echo "<br>";
    echo "<font face=Times New Roman>Gaji Anda Adalah : </font>". $gaji;
    echo "<p>";
  }



}

  ?>
     <br>
     <br>
</form>
  </div>
</div>
</center>
    </div>