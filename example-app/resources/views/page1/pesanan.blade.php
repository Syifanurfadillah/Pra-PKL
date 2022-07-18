<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Minuman anda : <strong>{{$minuman}}</strong>

    Hallo pesanan anda : <b>{{ $a }}</b>
    @if ($a == 'kopi')
        <br> harga {{ $a }} Rp.7000
    @else
        <br>
        list harga tidak ada
    @endif
</body>
</html>