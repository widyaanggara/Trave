<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('kategori')->insert([
                'id_kategori' => Str::uuid()->toString(),
                'nama_kategori' => 'Kategori ' . $i,
                'thumbnail' => 'thumbnail_' . $i . '.jpg',
                'description' => 'Deskripsi untuk kategori ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
