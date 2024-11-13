<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('customer')->insert([
                'id_user' => Str::uuid()->toString(),
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
                'profile_pic' => 'profile' . $i . '.jpg',
                'phone' => '081234567' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'role' => $i % 2 == 0 ? 'admin' : 'visitor',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
