<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                [
                    'title' => 'cây để bàn',
                    'order' => 1,
                    'status' => config('constants.status.draft'),
                ],
                [
                    'title' => 'cây quà tặng',
                    'order' => 2,
                    'status' => config('constants.status.draft'),
                ],
                [
                    'title' => 'cây ăn trái',
                    'order' => 3,
                    'status' => config('constants.status.draft'),
                ],
            ]
        );
    }
}
