<?php

use App\NamaKelas;
use Illuminate\Database\Seeder;

class NamaKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $namakelas = new NamaKelas;
        $namakelas->nama = 'hajar';
        $namakelas->save(); 
    }
}
