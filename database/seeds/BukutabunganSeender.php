<?php

use App\Bukutabungan;
use Illuminate\Database\Seeder;

class BukutabunganSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     $bukutabungan = new Bukutabungan;
        $bukutabungan->name= 'njjhss';
        $bukutabungan->status = 1;
        $bukutabungan->save();
    }
}
