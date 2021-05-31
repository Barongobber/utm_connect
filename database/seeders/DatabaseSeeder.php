<?php

namespace Database\Seeders;

use App\Models\GrantAccess;
use App\Models\Admin;
use App\Models\Management;
use App\Models\Member;
use App\Models\Role;
use Carbon\Carbon;
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
        // DB::table('grant_access')->insert([
        //     [
        //         'grant_id' => 1,
        //         'grant_desc' => 'member',
        //     ],[
        //         'grant_id' => 2,
        //         'grant_desc' => 'management',
        //     ],[
        //         'grant_id' => 3,
        //         'grant_desc' => 'admin',
        //     ]
        // ]);
        // DB::table('admin')->insert([
        //     'matrix_card' => 'm3matric',
        //     'admin_year' => 2020
        // ]);
        // DB::table('role')->insert([
        //     'role_id' => 1,
        //     'role_desc' => 'leader'
        // ]);
        // DB::table('member')->insert([
        //     [
        //         'matrix_card' => 'm1matric',
        //         'name' => 'm1name',
        //         'email' => 'm1email@gmail.com',
        //         'password' => bcrypt('m1password'),
        //         'batch' => 2020,
        //         'program_code' => 'm1program_code',
        //         'degree' => 'm1degree',
        //         'address' => 'm1address',
        //         'access_grant' => 1,
        //     ],[
        //         'matrix_card' => 'm2matric',
        //         'name' => 'm2name',
        //         'email' => 'm2email@gmail.com',
        //         'password' => bcrypt('m2password'),
        //         'batch' => 2020,
        //         'program_code' => 'm2program_code',
        //         'degree' => 'm2degree',
        //         'address' => 'm2address',
        //         'access_grant' => 2,
        //     ],[
        //         'matrix_card' => 'm3matric',
        //         'name' => 'm3name',
        //         'email' => 'm3email@gmail.com',
        //         'password' => bcrypt('m3password'),
        //         'batch' => 2020,
        //         'program_code' => 'm3program_code',
        //         'degree' => 'm3degree',
        //         'address' => 'm3address',
        //         'access_grant' => 3,
        //     ]
        // ]);
        // DB::table('management')->insert([
        //     'management_matrix_card' => 'm2matric',
        //     'management_year' => 2020,
        //     'management_role_id' => 1,
        //     'division_name' => 'div1',
        // ]);

        DB::table('event')->insert([
            'event_id' => 1,
            'event_title' => 'e1title',
            'event_category'=> 'Sport',
            'event_venue' => 'e1venue',
            'posted_on' => Carbon::parse('2021-03-03'),
            'open_for' => 'Participants',
            'closed_on' => Carbon::parse('2021-04-04'),
            'event_details' => 'e1details',
            'event_url' => 'e1url',
            'event_date' => Carbon::parse('2021-05-05'),
            'event_pic1' => 'e1pic1.PNG',
            'event_pic2' => 'e1pic2.PNG',
            'event_pic3' => 'e1pic3.PNG',
        ]);

        DB::table('event')->insert([
            'event_id' => 2,
            'event_title' => 'e2title',
            'event_category'=> 'Academic',
            'event_venue' => 'e2venue',
            'posted_on' => Carbon::parse('2021-04-04'),
            'open_for' => 'Committee',
            'closed_on' => Carbon::parse('2021-05-05'),
            'event_details' => 'e2details',
            'event_url' => 'e2url',
            'event_date' => Carbon::parse('2021-06-06'),
            'event_pic1' => 'e2pic1.PNG',
            'event_pic2' => 'e2pic2.PNG',
            'event_pic3' => 'e2pic3.PNG',
        ]);
    }
}
