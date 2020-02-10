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
    <legend>Show Buku</legend>
    nip                     : <b>{{$gaji->nip}}</b><br>
    nama                    : <b>{{$gaji->nama}}</b><br>
    agama                   : <b>{{$gaji->agama}}</b><br>
    jenis kelamin           : <b>{{$gaji->jenis_kelamin}}</b><br>
    alamat                  : <b>{{$gaji->alamat}}</b><br>
    jabatan                 : <b>{{$gaji->jabatan}}</b><br>
    @if($gaji->jabatan =='Manager')

    @php $uang =  5000000; @endphp

    @elseif($gaji->jabatan =='Sekretaris')
    @php $uang = 3500000 @endphp

    @else

    @php $uang = 2500000 @endphp

    @endif

    jam-kerja : <b>{{$gaji->jam_kerja}}</b><br>

    @if($gaji->jam_kerja >= 250)
    @php $b = $uang*10/100@endphp

    @elseif($gaji->jam_kerja>= 200)
    @php $b = $uang*7.5/100@endphp

    @elseif($gaji->jam_kerja>= 150)
    @php $b = $uang*5/100@endphp


    @endif


     Jabatan :  <b>{{ $uang }}</b><br>
    Total Jam_kerja : <b>{{ $b }}</b><br>
    Total Gaji     : <b>{{$uang+$b}}</b><br>




    </fieldset>
</body>
</html>