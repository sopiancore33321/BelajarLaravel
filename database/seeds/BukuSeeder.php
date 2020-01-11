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
       $buku->judul = 'kojnhyh PHP';
       $buku->jumlah_halaman = 100;
       $buku->penerbit = 'dwadwad Pustaka';
       $buku->synopsis = 'awdwadini adaawdwadlah......';
       $buku->status = 4;
       $buku->save();
    }
}
 

