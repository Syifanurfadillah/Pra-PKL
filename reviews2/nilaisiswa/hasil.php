<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indo = $_POST['indo'];
    $inggris = $_POST['inggris'];
    $mtk = $_POST['mtk'];
    $pro = $_POST['pro'];
    $total=0;
    $rata_rata=0;

  }
  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tampilan Restoran</title>
    </head>
    <body>
        
      <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
          <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Matematika</th>
            <th>Produktif</th>
            <th>Total Nilai</th>
            <th>Rata-rata</th>
            <th>Status</th>
          </tr>

          <?php
          for($a=0; $a<count($nis); $a++){
            ?>

            <tr>
              <td><?php echo $nis[$a]; ?></td>
              <td><?php echo $nama[$a]; ?></td>
              <td><?php echo $kelas[$a]; ?></td>
              <td><?php echo $indo[$a]; ?></td>
              <td><?php echo $inggris[$a]; ?></td>
              <td><?php echo $mtk[$a]; ?></td>
              <td><?php echo $pro[$a]; ?></td>
              <td><?php echo
                    $total = $indo[$a] + $inggris[$a] + $mtk[$a] + $pro[$a];
                    $total; ?></td>
              <td><?php echo $rata_rata = $total / 4;
              $rata_rata; ?></td>
              <td><?php if($rata_rata < 75 && $rata_rata > 0)
              echo "Tidak Lulus";
              elseif ($rata_rata >=75 && $rata_rata <=100)
              echo "Anda Lulus";}?></td>
            </tr>


          



      </center>

    </body>
    </html>