<?php

use Illuminate\Database\Seeder;
use App\Gaji;
class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     $gaji = new Gaji;
       $gaji->nip = '12231312';
       $gaji->nama = 'joro';
       $gaji->agama = 'budha';
       $gaji->jenis_kelamin = 'semuanya';
       $gaji->alamat = 'disini';
       $gaji->jabatan= 'Manager';
       $gaji->jam_kerja= '250';
       $gaji->save();

       $gaji = new Gaji;
       $gaji->nip = '3333211';
       $gaji->nama = 'ewaewa';
       $gaji->agama = 'islam';
       $gaji->jenis_kelamin = 'laki-laki';
       $gaji->alamat = 'disitu';
       $gaji->jabatan= 'Sekretaris';
       $gaji->jam_kerja= '200';
       $gaji->save();

       $gaji = new Gaji;
       $gaji->nip = '9876212';
       $gaji->nama = 'kioawdlokwao';
       $gaji->agama = 'kristen';
       $gaji->jenis_kelamin = 'laki-laki';
       $gaji->alamat = 'disana';
       $gaji->jabatan= 'Staff';
       $gaji->jam_kerja= '200';
       $gaji->save();

    }
}
