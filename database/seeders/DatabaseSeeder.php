<?php

namespace Database\Seeders;

use App\Models\GrantAccess;
use App\Models\Admin;
use App\Models\Management;
use App\Models\Member;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grant_access')->insert([
            [
                'grant_id' => 1,
                'grant_desc' => 'member',
            ], [
                'grant_id' => 2,
                'grant_desc' => 'management',
            ], [
                'grant_id' => 3,
                'grant_desc' => 'admin',
            ]
        ]);
        DB::table('member')->insert([
            [
                'matrix_card' => 'm1matric',
                'name' => 'm1name',
                'email' => 'm1email@gmail.com',
                'password' => bcrypt('m1password'),
                'batch' => 2020,
                'program_code' => 'm1program_code',
                'degree' => 'm1degree',
                'address' => 'm1address',
                'access_grant' => 1,
            ], [
                'matrix_card' => 'm2matric',
                'name' => 'm2name',
                'email' => 'm2email@gmail.com',
                'password' => bcrypt('m2password'),
                'batch' => 2020,
                'program_code' => 'm2program_code',
                'degree' => 'm2degree',
                'address' => 'm2address',
                'access_grant' => 2,
            ], [
                'matrix_card' => 'm3matric',
                'name' => 'm3name',
                'email' => 'm3email@gmail.com',
                'password' => bcrypt('m3password'),
                'batch' => 2020,
                'program_code' => 'm3program_code',
                'degree' => 'm3degree',
                'address' => 'm3address',
                'access_grant' => 3,
            ]
        ]);
        DB::table('admin')->insert([
            'matrix_card' => 'm3matric',
            'admin_year' => 2020
        ]);
        DB::table('role')->insert([
            'role_id' => 1,
            'role_desc' => 'leader'
        ]);



        DB::table('management')->insert([
            'management_matrix_card' => 'm2matric',
            'management_year' => 2020,
            'management_role_id' => 1,
            'division_name' => 'div1',
        ]);
    }
}
