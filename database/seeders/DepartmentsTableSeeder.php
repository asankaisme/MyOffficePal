<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seed department data
        DB::table('departments')->insert([
            [
                'depName' => 'ITD',
                'status' => 1,
            ],
            [
                'depName' => 'STAT',
                'status' => 1,
            ],
            [
                'depName' => 'PDD',
                'status' => 1,
            ],
            [
                'depName' => 'RDD',
                'status' => 1,
            ],
            [
                'depName' => 'ERD',
                'status' => 1,
            ],
            [
                'depName' => 'FMD',
                'status' => 1,
            ],

        ]);
    }
}
