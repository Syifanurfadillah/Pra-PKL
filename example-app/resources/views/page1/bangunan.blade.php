<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <hr>
    <h3>Bangunan Material</h3>

    @if ($material == 'pasir urug')
    Pesanan anda : <b>{{ $material }}</b>
        <br> harga {{ $material }} : Rp. 50000

    @elseif ($material == 'batako besar')
    Pesanan anda : <b>{{ $material }}</b>
        <br> harga {{ $material }} : Rp. 30000

    @elseif ($material == 'bata merah')
    Pesanan anda : <b>{{ $material }}</b>
        <br> harga {{ $material }} : Rp. 40000

    @elseif ($material == 'batu apung')
    Pesanan anda : <b>{{ $material }}</b>
        <br> harga {{ $material }} : Rp. 65000

    @else
    Mohon maaf material yang anda cari tidak ada
    <br>
    @endif
    <br>

    <br>
    @if ($material1 == 'pasir urug')
    Pesanan anda : <b>{{ $material1 }}</b>
        <br> harga {{ $material1 }} : Rp. 50000

    @elseif ($material1 == 'batako besar')
    Pesanan anda : <b>{{ $material1 }}</b>
        <br> harga {{ $material1 }} : Rp. 30000

    @elseif ($material1 == 'bata merah')
    Pesanan anda : <b>{{ $material1 }}</b>
        <br> harga {{ $material1 }} : Rp. 40000

    @elseif ($material1 == 'batu apung')
    Pesanan anda : <b>{{ $material1 }}</b>
        <br> harga {{ $material1 }} : Rp. 65000
    


    @else
        Mohon maaf material yang anda cari tidak ada
    @endif
    </center>
</body>
</html>