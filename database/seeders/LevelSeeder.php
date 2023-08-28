<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'var'=>'level_text_ar',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'level_text_en',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'level_image_ar',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'level_image_en',
            'value'=>'null',
        ]);
    }
}
