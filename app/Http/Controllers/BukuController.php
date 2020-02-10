<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;

class BukuController extends Controller
{

    public function index(){

    $buku = Buku::all();
    return view('buku.index', compact('buku'));
    }
    public function show($id){
        $buku = Buku::find($id);
        return view('buku.show', compact('buku'));;
    }
         public function hitungbuku(){
        $buku = Buku::count();
        return view('buku.index', compact('buku'));
    }
    public function buat_data($jdl){
       $buku = new Buku;
       $buku->judul = $jdl;
       $buku->jumlah_halaman = 21000;
       $buku->penerbit = 'cg fruit gh';
       $buku->synopsis = 'bukus ini ini......';
       $buku->status = false;
       $buku->save();

       return view('buku.index', compact('buku'));

    }
    public function update($id, $judul){
        $buku = Buku::find($id);
        $buku->judul = $judul;
       $buku->jumlah_halaman = 100;
       $buku->penerbit = 'cv Lorem Ipsum';
       $buku->synopsis = 'Lorem Ipsum';
       $buku->status = false;
       $buku->save();
        return view('buku.index', compact('buku'));

    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return view('buku.index', compact('buku'));
    }
}
