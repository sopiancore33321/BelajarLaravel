<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Buku</center>
    <table border="1">
    <tr>
    <thead>
    <th>Nip</th>
    <th>Nama</th>
    <th>Jenis_kelamin</th>
    <th>Jabatan</th>
    <th>Aksi</th>
    </thead>
    </tr>
    <tbody>
    @foreach($gaji as $gajian)
    <tr>
    <td>{{$gajian->nip}}</td>
    <td>{{$gajian->nama}}</td>
    <td>{{$gajian->jenis_kelamin}}</td>
    <td>{{$gajian->jabatan}}</td>
    <td> <a href="/gajian/{{ $gajian->id }}">lihat</a></td>
    </tr>
    @endforeach-
    </tbody>
    </table>
</body>
</html>