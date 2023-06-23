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
            // [
            //     'id' => 1,
            //     'name' => 'SysAdmin',
            //     'email' => 'sysadmin@cbsl.lk',
            //     'password' => Hash::make('sysadmin123'),
            //     'role_id' => 1,
            //     'department_id' => 1,
            //     'isDeletable' => 1,
            // ],
            // [
            //     'name' => 'DepEntryUser',
            //     'email' => 'depentryuser@cbsl.lk',
            //     'password' => Hash::make('depentry123'),
            //     'isDeletable' => 1,
            // ],
            // [
            //     'name' => 'DepApproveUser',
            //     'email' => 'depapproveuser@cbsl.lk',
            //     'password' => Hash::make('depapprove123'),
            //     'isDeletable' => 1,
            // ],
            // [
            //     'name' => 'HelpDeskUser',
            //     'email' => 'helpdesk@cbsl.lk',
            //     'password' => Hash::make('helpdesk123'),
            //     'isDeletable' => 1,
            // ],
            [
                'name' => 'Asanka Rubasinghe',
                'email' => 'asankaisme@gmail.com',
                'password' => bcrypt('asanka123'),
            ],
 
            [
                'name' => 'Kasun Priyashantha',
                'email' => 'kasun@gmail.com',
                'password' => Hash::make('kasun123'),
            ],
        ]);
    }
}
