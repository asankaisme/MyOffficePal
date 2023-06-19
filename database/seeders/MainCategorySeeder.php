<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('main_categories')->insert([
            [
                'mainCatName' => 'LAPTOP',
                'status' => 1,
            ],
            [
                'mainCatName' => 'DESKTOP',
                'status' => 1,
            ],
            [
                'mainCatName' => 'IPAD',
                'status' => 1,
            ],
            [
                'mainCatName' => 'SWITCH',
                'status' => 1,
            ],
            [
                'mainCatName' => 'EXTHDD',
                'status' => 1,
            ],
            [
                'mainCatName' => 'USBPEN',
                'status' => 1,
            ],
        ]);
    }
}
