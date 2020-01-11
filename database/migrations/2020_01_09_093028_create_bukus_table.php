<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul')->unique(); // tidak boleh sama
            $table->integer('jumlah_halaman')->default(); // kalau gak di isi otomatis 50
            $table->string('penerbit')->nullable(); // tidak wajib di isi
            $table->text('synopsis')->nullable(); // tidak wajib di isi
            $table->boolean('status')->default(1); // kalau gak di isi otomatis 
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
        Schema::dropIfExists('bukus');
    }
}
