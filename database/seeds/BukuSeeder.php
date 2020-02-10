<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $buku = new Buku;
       $buku->judul = 'buku ini cerita  siapa';
       $buku->jumlah_halaman = 2000;
       $buku->penerbit = 'cv fruit gh';
       $buku->synopsis = 'buku ini ini......';
       $buku->status = 1;
       $buku->save();
    }
}
 

