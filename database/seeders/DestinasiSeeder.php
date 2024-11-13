<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DestinasiSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('destinasi')->insert([
                'id_destinasi' => Str::uuid()->toString(),
                'nama_destinasi' => 'Destinasi ' . $i,
                'alamat' => 'Alamat destinasi ' . $i,
                'description' => 'Deskripsi destinasi ' . $i,
                'thumbnail' => 'destinasi_' . $i . '.jpg',
                'galeri_1' => 'galeri1_' . $i . '.jpg',
                'galeri_2' => 'galeri2_' . $i . '.jpg',
                'galeri_3' => 'galeri3_' . $i . '.jpg',
                'nama_kategori' => DB::table('kategori')->inRandomOrder()->first()->id_kategori,
                'sub_judul' => 'Sub judul destinasi ' . $i,
                'duration' => rand(1, 5) . 'h',
                'harga_dewasa_paket' => rand(100000, 500000),
                'harga_anak_paket' => rand(50000, 300000),
                'harga_dewasa_nonpaket' => rand(100000, 500000),
                'harga_anak_nonpaket' => rand(50000, 300000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
