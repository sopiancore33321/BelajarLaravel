<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function latihan6(){
        $nama = 'asepsopian';
        $Agama = 'islam';
        $jenis_kelamin = 'laki-laki';
        $alamat = 'situtarate no 13';
        $sekolah = 'smk assalaam';
        $kelas = 'XI RPL 3';
        $jurusan = 'RPL';
        $Hobi = 'Bermain Basket';
        $umur = '17';
        return view('biodata',compact('nama', 'Agama', 'jenis_kelamin', 'alamat', 'sekolah', 'kelas', 'jurusan', 'Hobi', 'umur'));
    
    
      }

      public function pass(){
        $nama = "ucup abdul mustofa";
        $alamat = "gang haji sulam";
        return view('latihan', compact('nama','alamat'));
      }
      public function pass1(){
        $gaji = 2000000;
        return view('latihan1',['penghasilan'->$gaji]);
      }
      public function status($status='jomblo'){
        // dd($status);
        return view('latihan2',compact('status'));
      }
      public function loop(){
        $buku = [
         ['judul'=>'Bangkit dari remidia','penerbit'=>'erlangga',
           'harga'=>100000, 'penulis'=>'aku yang suka remidi'
          ],

           ['judul'=>'Tips Move on dari kamu','penerbit'=>'erlangga',
           'harga'=>150000, 'penulis'=>'epul' 
           
          ],
          
          ['judul'=>'kekuatan 1/2 malam','penerbit'=>'erlangga',
           'harga'=>250000,'penulis'=>'mutia' 
           ]
        ];
        return view ('latihan3',compact('buku'));

      }

}
