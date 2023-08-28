<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'var'=>'about',
            'image'=>'admin@admin.com',
        ]);
        DB::table('headers')->insert([
            'var'=>'level',
            'image'=>'admin@admin.com',
        ]);
        DB::table('headers')->insert([
            'var'=>'blog',
            'image'=>'admin@admin.com',
        ]);
        DB::table('headers')->insert([
            'var'=>'contact',
            'image'=>'admin@admin.com',
        ]);
        DB::table('headers')->insert([
            'var'=>'partenar',
            'image'=>'admin@admin.com',
        ]);
        DB::table('headers')->insert([
            'var'=>'privcy',
            'image'=>'admin@admin.com',
        ]);
        DB::table('headers')->insert([
            'var'=>'vidoes',
            'image'=>'admin@admin.com',
        ]);
    }
}
