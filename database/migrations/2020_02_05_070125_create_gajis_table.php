<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip'); // tidak boleh sama
            $table->string('nama');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->text('alamat'); // kalau gak di isi otomatis 50
            $table->string('jabatan'); // tidak wajib di isi
            $table->integer('jam_kerja'); // tidak wajib di isi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gajis');
    }
}
