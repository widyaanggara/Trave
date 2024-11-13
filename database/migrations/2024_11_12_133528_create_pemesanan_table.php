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
            $table->unsignedInteger('customer_id'); // FK ke customer
            $table->unsignedInteger('destinasi_id'); // FK ke destinasi
            $table->date('date_order');
            $table->integer('jumlah_pax', false, true); // unsigned
            $table->enum('status', ['confirmed', 'waiting', 'canceled']);
            $table->time('time_travel');
            $table->date('date_travel');
            $table->timestamps();

            // Menambahkan Foreign Key
            $table->foreign('customer_id')->references('id_user')->on('customer')->onDelete('cascade');
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
