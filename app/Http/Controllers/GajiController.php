<?php

namespace App\Http\Controllers;

use App\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){

        $gaji = Gaji::all();
        return view('gaji.index', compact('gaji'));
        }
        public function show($id){
            $gaji = Gaji::find($id);
            return view('gaji.show', compact('gaji'));;
        }
        //      public function hitungbuku(){
        //     $gaji = Gaji::count();
        //     return view('gaji.index', compact('gaji'));
        // }
        // public function buat_data($jb, $jk){
        //    $gaji = new Gaji;
        //    $gaji->nip ='12223122' ;
        //    $gaji->nama = 'udin';
        //    $gaji->agama = 'islam';
        //    $gaji->jenis_kelamin = 'laki-laki';
        //    $gaji->alamat = 'tidak punya rumah';
        //    $gaji->jabatan = $jb;
        //    $gaji->jam_kerja = $jk; 
        //    $gaji->save();
    
        //    return view('gaji.index', compact('gaji'));
    
        // }
        // public function update($id, $judul){
        //     $buku = Buku::find($id);
        //     $buku->judul = $judul;
        //    $buku->jumlah_halaman = 100;
        //    $buku->penerbit = 'cv Lorem Ipsum';
        //    $buku->synopsis = 'Lorem Ipsum';
        //    $buku->status = false;
        //    $buku->save();
        //     return view('buku.index', compact('buku'));
    
        // }
        // public function delete($id){
        //     $buku = Buku::find($id);
        //     $buku->delete();
        //     return view('buku.index', compact('buku'));
        // }
    
}