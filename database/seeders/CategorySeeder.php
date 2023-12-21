<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        'name' => 'Pop',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    
        DB::table('categories')->insert([
        'name' => 'Jazz',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
        'name' => 'R&B',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
        'name' => 'EDM',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
        'name' => 'Rock',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
        'name' => 'HipHop',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    }
}
