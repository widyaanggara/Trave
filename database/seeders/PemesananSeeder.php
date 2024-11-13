<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PemesananSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('pemesanan')->insert([
                'id_pemesanan' => Str::uuid()->toString(),
                'id_user' => DB::table('customer')->inRandomOrder()->first()->id_user,
                'date_order' => now()->subDays(rand(1, 30)),
                'nama_destinasi' => DB::table('destinasi')->inRandomOrder()->first()->id_destinasi,
                'jumlah_pax' => rand(1, 10),
                'status' => ['confirmed', 'waiting', 'canceled'][array_rand(['confirmed', 'waiting', 'canceled'])],
                'time_travel' => now()->addHours(rand(1, 10))->format('H:i:s'),
                'date_travel' => now()->addDays(rand(1, 30)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
