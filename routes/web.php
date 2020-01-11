<?php

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
use App\Buku;

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