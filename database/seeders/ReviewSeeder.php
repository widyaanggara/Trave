<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('review')->insert([
                'id_review' => Str::uuid()->toString(),
                'comment' => 'Komentar untuk destinasi ' . $i,
                'id_destinasi' => DB::table('destinasi')->inRandomOrder()->first()->id_destinasi,
                'rating' => rand(1, 5),
                'date' => now()->subDays(rand(1, 30)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
