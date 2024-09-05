<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('universities')->insert(
            [
                'name'=>'慶應義塾大学'
            ],
            [
                'name'=>'早稲田大学'
            ],
        );
            
            
    }
}
