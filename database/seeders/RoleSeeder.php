<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //role seeder
        DB::table('roles')->insert([
            [
                'id' => 1,
                'role' => 'SysAdmin',
                'isDeletable' => 1,
                'status' => 1
            ],

            [
                'id' => 2,
                'role' => 'DepEntryUser',
                'isDeletable' => 1,
                'status' => 1
            ],

            [
                'id' => 3,
                'role' => 'DepApproveUser',
                'isDeletable' => 1,
                'status' => 1
            ],

            [
                'id' => 4,
                'role' => 'HelpDeskUser',
                'isDeletable' => 1,
                'status' => 1
            ],
        ]);
    }
}
