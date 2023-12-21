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
            'body' => 'kryptoniteはアメリカのマンガ「スーパーマン」の中で描写されているスーパーマンを無力化する石のことです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '1',
            'body' => 'kryptoniteはアメリカのマンガ「スーパーマン」の中で描写されているスーパーマンを無力化する石のことです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
    }
}
