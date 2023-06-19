<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seed user data
        DB::table('users')->insert([
            [
                'name' => 'asanka rubasinghe',
                'email' => 'asankaisme@gmail.com',
                'password' => bcrypt('asanka123'),
            ],
 
            [
                'name' => 'Rajitha Rubasinghe',
                'email' => 'rajitha79@gmail.com',
                'password' => Hash::make('rajitha123'),
            ],
        ]);
    }
}
