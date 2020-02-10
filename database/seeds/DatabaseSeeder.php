<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(BukuSeeder::class);
        // $this->call(NamaKelasSeeder::class);
        // $this->call(BukutabunganSeender::class);
        // $this->call(SiswaSeeder::class);
        // $this->call(GajiSeeder::class);

        $this->call('RelasiSeeder');
		# Tampilkan informasi berikut bila Seeder telah dilakukan
		$this->command->info('RelasiSeeder berhasil.');
    }   
    
}
