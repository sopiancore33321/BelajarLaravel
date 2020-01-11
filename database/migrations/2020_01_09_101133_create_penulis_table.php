<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenulisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penulis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_penulis')->unique(); // tidak boleh sama
            $table->string('alamat_penulis')->default(); // kalau gak di isi otomatis 50
            $table->integer('umur_penulis')->nullable(); // tidak wajib di isi
            $table->string('tanggal_lahir')->nullable(); // tidak wajib di isi
            $table->string('status')->default(1); // kalau gak di isi otomatis 
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
        Schema::dropIfExists('penulis');
    }
}
