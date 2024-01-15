<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'music_id' => '4cluDES4hQEUhmXj6TXkSo',
            'artist_name' => 'One Direction',
            'title' => "You're insecure",
            'body' => 'insecureは不安なという意味',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'music_id' => '3iLBFgaQJ94iarMgzrTuWb',
            'artist_name' => 'Charlie Puth',
            'title' => 'Get her name and get her nummber',
            'body' => 'あの子の名前を知って、電話番号を知って',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'music_id' => '7JJmb5XwzOO8jgpou264Ml',
            'artist_name' => 'Shawn Mendes',
            'title' => "There's Nothing Holdin' ME Back",
            'body' => '彼女が行く場所についていきたい',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
    }
}
