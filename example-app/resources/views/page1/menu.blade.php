<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>
        MENU
    </legend>

    @foreach ($menu as $menupilihan)
        <li>{{$menupilihan['menu1']}}</li> <br>
        <li>{{$menupilihan['menu2']}}</li> <br>

        <ul type="square">
            <li>{{ $menupilihan['kategori'] }}</li>
        </ul>
         
        <ul type="square">
            @foreach ($menupilihan['jenisOR'] as $Olahraga)
        <ul>
            <li>{{$Olahraga}}</li>
        </ul>
    @endforeach
        </ul>
        </ul>
                
    @foreach ($menupilihan['kategori1'] as $kategori1)
        <ul type="square">
        <li>{{$kategori1}}</li>
        </ul>
    @endforeach
        <li>{{$menupilihan['menu3']}}</li> <br>
        </ul>
    @endforeach

    </fieldset>
</body>
</html>