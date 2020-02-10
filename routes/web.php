<?php

use App\Buku;
use App\Siswa;
use Illuminate\Database\Seeder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
   return buku::all();
});


Route::get('pesan', function(){
    return 'ini hanya untuk pesan';
});

Route::get('saya', function(){
return 'halo dunia';

});
Route::get('kami', function(){
    return 'manusia';
    
 });
Route::get('untuk', function(){
        return 'untuk jadi ';
        
  });
Route::get('anda', function(){
   return 'rpl';
   });

   Route::get('html', function(){
       return 'ini halaman html <br> ini juga';
   });

   Route::get('variable', function(){
$data = 'ini variable data';
return $data;
   });

   Route::get('bilangan', function(){
       $data1 = "ini variable data1";
       $data2 = "ini variable data2";
       $data3 = "ini variable data3";
       $data4 = "ini variable data4";
       $data5 = "ini variable data5";
       return "$data1 <br> $data2 <br> $data3<br> $data4<br> $data5<br>"; 

   });
   route::get('angkot/{jurusan}', function(){
       $jurusan = 'cibaduyut - karang setra';
       $rpl = 'cibaduyut - cangkuang';
       $gg = 'cibaduyut - kotabaru';
       $rpl1 = 'cangkuang - cibaduyut';
       $gg1 = 'kotabaru - cibaduyut';
       $data = 'Angkot Jurusan : ';
       return $data.' '.$jurusan."<br>".$data.' '.$rpl."<br>".$data.' '.$gg."<br>".$data.' '.$rpl1."<br>".$data.' '.$gg1;

   });

   route::get('user/{nama}/{alamat}/{nomor}', function($nama, $alamat, $nomor){
       return 'halo '.$nama. " yang beralamat di".$alamat." Nomor".$nomor;
   });

   route::get('nilai/{nilai?}', function($nilai= 'null'){
       return $nilai;

   });

//    route::get('nama/{nama}/{nilai?}', function($nama, $nilai= "nilai anda tidak ada"){


//      if ($nilai <= 20) {
//            $grade = 'grade E';
//        }
//        else if ($nilai <= 30) {
//         $grade = 'grade D';
//        }
//     }
//     // else if ($nilai <= 40) {
//     //  $grade = 'grade C';
//     // }

//        else if ($nilai <= 50) {
//         $grade = 'grade B';       
//     }
//        else if ($nilai >= 50) {
//         $grade = 'grade A';
       
//        }
       

//        return $nilai;


//        });

Route::get('Contoh','ContohController@latihan');

Route::get('profil','ContohController@latihan2');

Route::get('profil2','ContohController@latihan3');

Route::get('profil3','ContohController@latihan4');

// soal biodata

Route::get('biodata','LatihanController@latihan6');
// Route::get('menu/{pizza?}','ContohController@latihan7');

Route::get('menu/{mkn?}/{js?}/{hg?}','ContohController@menu');
// Route::get('Buku','BukuController@index');

Route::get('buku','BukuController@buat_data');

// crud buku

Route::get('get-buku','BukuController@index');
Route::get('create-buku/{judul}','BukuController@buat_data');
Route::get('get-buku/{id}','BukuController@show');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('upadate-buku/{id}','BukuController@update');
Route::get('hitung-buku/{id}','BukuController@hitungbuku');

// curd pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
// soal crud 

Route::get('get-siswa','SiswaController@index');
Route::get('create-siswa/{nama}','SiswaController@buat_siswa');
Route::get('get-siswa/{id}','SiswaController@showsiswa');
Route::get('delete-siswa/{id}','SiswaController@deletesiswa');
Route::get('upadate-siswa/{id}','SiswaController@updatesiswa');
Route::get('hitung-siswa/{id}','SiswaController@hitungsiswa');

// Passing Data 
Route::get('pass','latihanController@pass');
Route::get('status/{o?}','latihanController@status');
Route::get('buku','latihanController@loop');


// Book

Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

// Gajian


Route::get('gajian','GajiController@index');
Route::get('gajian/{id}','GajiController@show');

// Belajar Blade Templating

Route::get('/profil',function(){
    return view('profil');
});

Route::get('/kontak',function(){

    return view('contact');
});

//tugas
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;
Route::get('relasi-1', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;

});
Route::get('relasi-2', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;

});

Route::get('relasi-3', function() {

    # Temukan dosen dengan yang bernama Yulianto
    $dosen = Dosen::where('nama', '=', 'Yulianto')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
});
	# URL localhost:8000/relasi-4/
	Route::get('relasi-4', function() {

		# Bila kita ingin melihat hobi saya
		$novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

		# Tampilkan seluruh hobi si novay
		foreach ($novay->hobi as $temp) 
			echo '<li>' . $temp->hobi . '</li>';
	});
Route::get('relasi-5', function() {

    # Temukan hobi Mandi Hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    # Tampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';

});

Route::get('eloquent', function(){
$data = Mahasiswa::with('wali','dosen', 'hobi',)->get();
return view('eloquent', compact('data'));
});













