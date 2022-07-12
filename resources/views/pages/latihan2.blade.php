<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Menu</h2>
    {{-- Makanan = {{$a}} <br>
    Minuman = {{$b}} <br>
    Cemilan ={{$c}} --}}
    
    Makanan :{{$a}} <br>
    Minuman :{{$b}} <br>
    Rokok :{{$c}} <br>
    Harga Makanan :

    @if($a == "Mie goreng"){{
        $harga_makanan = 5000
    }}
    @elseif($a == "Seblak"){{
        $harga_makanan = 10000
    }}
    @elseif($a == "Baso"){{
        $harga_makanan = 25000
    }}
    @else{{
        $harga_makanan = "Makanan Tidak Tersedia"
    }}
    @endif
    <br>
    Harga Minuman :

    @if($b=="Kopi"){{
        $harga_minuman = 5000
    }}
    @elseif($b=="Jus"){{
        $harga_minuman = 15000
    }}
    @elseif($b=="Teh"){{
        $harga_minuman = 4000
    }}
    @else{{
        $harga_minuman = "Maaf Minuman Tidak Tersedia"
    }}
    @endif
    <br>
    Harga Rokok :

    @if($c=="Sampoerna Mild"){{
        $harga_rokok = 28000
    }}
    @elseif($c=="Gudang Garam"){{
        $harga_rokok = 20000
    }}
    @elseif($c=="Magnum"){{
        $harga_rokok = 21000
    }}
    @else{{
        $harga_rokok = "Maaf Rokok Tidak Tersedia"
    }}
    @endif


</body>
</html>