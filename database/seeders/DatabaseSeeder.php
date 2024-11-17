<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
// use ReviewSeeder;
// use CustomerSeeder;
// use KategoriSeeder;
use DestinasiSeeder;
use PemesananSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            // KategoriSeeder::class,
            DestinasiSeeder::class,
            // CustomerSeeder::class,
            // ReviewSeeder::class,
            PemesananSeeder::class,
        ]);
    }

}