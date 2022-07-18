<?php

$url = "https://jsonplaceholder.typicode.com/albums/";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$dataCovid = curl_exec($ch);

curl_close($ch);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
      <center>
          <nav>
              <a href="json-api.php">Data Covid</a> |
              <a href="json-indonesia.php">Data Indonesia</a> |
              <a href="json-provinsi.php">Data Covid Provinsi</a> |
          </nav>
      </center>
      <center>
      <fieldset>
          <legend>Data Covid</legend>
          <table border="1">
              <tr>
                  <th>userId</th>
                  <th>Id</th>
                  <th>title</th>
              </tr>
              <?php
              $data = json_decode($dataCovid);

              foreach ($data as $covid) {
              ?>
              <tr>
                  <td><?php echo $covid->userId; ?></td>
                  <td><?php echo $covid->id; ?></td>
                  <td><?php echo $covid->title; ?></td>
              </tr>
              <?php } ?>
          </table>
      </fieldset>
      </center>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>