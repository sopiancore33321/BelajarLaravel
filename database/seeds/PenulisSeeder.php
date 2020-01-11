<?php

use App\Penulis;
use Illuminate\Database\Seeder;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penulis = new penulis;
   $penulis->nama_penulis = 'hajar';
   $penulis->alamat_penulis= 'Bandung'; 
   $penulis->umur_penulis = 16;
   $penulis->tanggal_penulis = '28';
   $penulis->status = 1;
   $penulis->save();
    }
}
