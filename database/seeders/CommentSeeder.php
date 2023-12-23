<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '1',
            'body' => '彼女に自信を持たせるため',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '2',
            'body' => '彼女との最初の出会いのきっかけ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '2',
            'body' => '恋をしている男性側の切ない気持ち',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '3',
            'body' => 'I think about her she knows it  ぼくの気持ちにもう気づいているだろ？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
    }
}
