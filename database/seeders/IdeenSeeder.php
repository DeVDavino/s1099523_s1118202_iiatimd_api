<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class IdeenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('ideen')->insert([
            'titel' => 'School project',
            'description' => 'Een leuke omschrijving van een idee',
            'categorie' => 'School',
            'user_id' => 1,
        ]);

        


    }
}
