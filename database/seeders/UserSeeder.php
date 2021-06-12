<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kasper',
            'email' => 's1118202@student.hsleiden.nl',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'Davino',
            'email' => 's1099523@student.hsleiden.nl',
            'password' => bcrypt('laravel'),
        ]);
    }
}
