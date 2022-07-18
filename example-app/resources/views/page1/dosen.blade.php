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
        Data dosen
    </legend>
        @foreach ($dosen as $data)
        @php
            $total = 0;
        @endphp
            <br>Nama Dosen : {{ $data['Nados'] }} </br>
            <br>Mata Kuliah : {{ $data['MatKul'] }} </br>
            <br> Daftar Mahasiswa  : </br><br>
        @foreach ($data['mahasiswa'] as $siswa)
            <li> {{ $siswa['nama'] }}
                <br>

        Nilai Skripsi : {{ $siswa['nilai'] }}</li> 
        @if($siswa['nilai'] >= 90 && $siswa['nilai'] <= 100)
            Grade : A 
            @elseif($siswa['nilai'] >= 80 && $siswa['nilai'] <= 89)
            Grade : B
            @elseif($siswa['nilai'] >= 70 && $siswa['nilai'] <= 79)
            Grade : C
            @elseif($siswa['nilai'] >= 50 && $siswa['nilai'] <= 69)
            Grade : D
            @elseif($siswa['nilai'] >= 0 && $siswa['nilai'] <= 49)
            Grade : E
            @endif
            <hr> 
        @php $total += $siswa['nilai'] @endphp
        @endforeach
        @php $rata_rata = $total / count($data['mahasiswa']) 
        @endphp
            <br>
            Rata-Rata Nilai Skripsi Mahasiswa Bimbingan <b>{{ $data['Nados'] }}</b> :
            {{ $rata_rata }}
            <b>
            <hr style="border: 1px dashed black"></b>
        @endforeach
            

    </fieldset>
</body>
</html>