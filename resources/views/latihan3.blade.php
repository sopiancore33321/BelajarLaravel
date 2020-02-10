<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Dftar Buku</center>
    @foreach($buku as $data)
    judul : {{ $data['judul'] }} <br>
    penerbit : {{ $data['penerbit'] }} <br>
    Harga : {{ $data['harga'] }} <br>
    penulis : {{ $data['penulis'] }} <hr>

    @if($data['harga'] >= 150000 && $data['harga'] < 200000 )
    @php status : Reguler @endphp<hr>
    @elseif($data['harga'] > 200000)
    @php status : premium @endphp<hr>
    @elseif($data['harga'] < 150000)

    @php status : bajakan @endphp<hr>

    status = {{ $status }}

    @endif
    
    @if($status == 'Premium' || $status == 'reguler')
    @php $keterangan = 'Pembeli Cerdas' @endphp
    @php $keterangan = 'Pembeli Kurang Cerdas' @endphp
    @endif
    status = {{ $status }} <hr>
    keterangan = {{ $keterangan }}
<hr>
    @endforeach
</body>
</html>