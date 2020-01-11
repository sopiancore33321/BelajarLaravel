<?php

use App\Perahu;
use Illuminate\Database\Seeder;

class PerahuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perahu = new Perahu;
        $perahu->nama_perahus = 'hajar';
        $perahu->jenis_perahus = 'eeer';
        $perahu->nomor_perahus= 12;
        $perahu->save();
        
    }
}
