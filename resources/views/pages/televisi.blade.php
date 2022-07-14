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
        <legend>JADWAL TAYANG TELEVISI</legend>
        @foreach($tv as $televisi)
        Nama TV : {{ $televisi ['Nama_Tv'] }} <br>
        @foreach($televisi['jadwal'] as $tv )
        Acara : {{$tv ['nama']}}  <br>
        Jam Tayang : {{$tv ['jam_tayang']}} <br>
            
        @endforeach
            =============================== <br>
        @endforeach
    </fieldset>
</body>
</html>