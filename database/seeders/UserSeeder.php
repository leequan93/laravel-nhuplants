<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'Minh Quân',
                'email' => 'l.minhquan1504@gmail.com',
                'password' => '$2y$10$gqDhgRaXAABjj2BPqbux8.r.HVKLCd0FO/nHTnSjvqsGZkQzm6p26',
            ]
        );
    }
}
