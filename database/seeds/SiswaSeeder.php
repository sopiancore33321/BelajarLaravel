<?php

use Illuminate\Database\Seeder;
use App\Siswa;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = new Siswa;
        $siswa->nama = 'titah tukang sapu';
        $siswa->nis = '0982';
        $siswa->kelas = 'xii rpl 9';
        $siswa->jurusan = 'lisapu';
        $siswa->alamat= ' punya rumah';
        $siswa->tgl_lahir ="112 masehi";
        $siswa->status = 1;
        $siswa->save();
    }
}
