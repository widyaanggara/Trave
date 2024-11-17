<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('id_pemesanan'); // Primary Key, Auto Increment
            $table->unsignedBigInteger('user_id'); // FK ke customer
            $table->unsignedBigInteger('destinasi_id'); // FK ke destinasi
            $table->date('date_order');
            $table->integer('jumlah_dewasa', false, true); // Jumlah Dewasa
            $table->integer('jumlah_anak', false, true);
            $table->integer('jumlah_pembayaran', false, true);
            $table->enum('paket', ['guide', 'nonguide']);
            $table->enum('status', ['confirmed', 'waiting', 'canceled']);
            $table->time('time_travel');
            $table->date('date_travel');
            $table->timestamps();

            // Menambahkan Foreign Key
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('destinasi_id')->references('id_destinasi')->on('destinasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
