<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        @foreach ($siswa as $murid)
            nama : {{ $murid['name'] }} <br>
            umur : {{ $murid['age']  }} <br>
            status :
            @if($murid['age']>17)
            anda berhak mendapatkan ktp
                
            @else
            Anda Belum Berhak Mendapatkan ktp    
            @endif
            
            <br>
            daftar mata pelajaran :
            @foreach($murid['mapel'] as $mapel)
            <li>{{$mapel}}</li>
            @endforeach
            @foreach($murid['hobby'] as $hobby)
            <li>{{$hobby}}</li>
            @endforeach
            <hr>
            @endforeach
    </fieldset>
</body>
</html>