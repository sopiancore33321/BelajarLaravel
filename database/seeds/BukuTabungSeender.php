<?php

use App\Bukutabungan;
use Illuminate\Database\Seeder;

class BukuTabungSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bukutabungan = new Bukutabungan;
       
        $bukutabungan->save();
    }
}
