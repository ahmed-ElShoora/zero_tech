<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'var'=>'about_ar',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'about_en',
            'value'=>'null',
        ]);
    }
}
