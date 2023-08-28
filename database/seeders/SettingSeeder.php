<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'var'=>'logo',
            'value'=>'image',
        ]);
        DB::table('settings')->insert([
            'var'=>'meta_title',
            'value'=>'title',
        ]);
        DB::table('settings')->insert([
            'var'=>'meta_desc',
            'value'=>'desc',
        ]);
        DB::table('settings')->insert([
            'var'=>'facebook',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'insta',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'twitter',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'snapchat',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'slider_color',
            'value'=>'null',
        ]);
        DB::table('settings')->insert([
            'var'=>'logo_footer',
            'value'=>'null',
        ]);
    }
}
