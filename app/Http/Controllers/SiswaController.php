<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index(){

        $siswa = Siswa::all();
        return $siswa;
        }
        public function show($id){
            $siswa = Siswa::find($id);
            return $siswa;
        }
        public function hitungsiswa(){
            $siswa = Siswa::count();
            return $siswa;
        }
        public function buat_siswa($nm){
            $siswa = new Siswa;
            $siswa->nama = $nm;
            $siswa->nis = "001";
            $siswa->kelas = 'xiii rpl 3';
            $siswa->jurusan = 'informasi komputer';
            $siswa->alamat = 'tidakwdawd ada rumah';
            $siswa->tgl_lahir = '12-23-20002';
            $siswa->status = false;
            $siswa->save();
     
            return $siswa;
        }

        public function updatesiswa($id, $nama){
        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
     $siswa->nis = '0912312';
        $siswa->kelas = 'xi rpl 3';
            $siswa->jurusan = 'rpl';
            $siswa->alamat = 'tidak ada rumah';
            $siswa->tgl_lahir = '12-23-2001';
            $siswa->status = false;
            
        $siswa->save();
        return $siswa;
    
        }
        public function deletesiswa($id){
            $siswa = Siswa::find($id);
            $siswa->delete();
            return $siswa;
        }

}
