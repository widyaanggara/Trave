<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('destinasi', function (Blueprint $table) {
            $table->id('id_destinasi');
            $table->string('nama_destinasi', 50);
            $table->string('alamat', 100);
            $table->string('description', 255);
            $table->string('thumbnail', 255);
            $table->string('galeri_1', 255)->nullable();
            $table->string('galeri_2', 255)->nullable();
            $table->string('galeri_3', 255)->nullable();
            $table->string('kategori', 50);
            $table->string('sub_judul', 100);
            $table->string('duration', 5);
            $table->integer('harga_dewasa_paket');
            $table->integer('harga_anak_paket');
            $table->integer('harga_dewasa_nonpaket');
            $table->integer('harga_anak_nonpaket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('destinasi');
    }
};
