<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash; 
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'email' =>Str::random(10).'@gmail.com',
                'password'=>Hash::make('abcd1234'),
                'name'=>Str::random(10),
                'major_subject'=>'理系',
                'grade'=>3,
                'gender'=>2,
                'purpose_id'=>1,
                'university_id'=>1,
                'email_verified_at'=>new DateTime(),
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'introduction'=>'皆さんと仲良くなりたいです！',
            
            ]);
    }
}
