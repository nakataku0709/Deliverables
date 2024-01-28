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
            'title' => "the stars are aligning",
            'body' => 'stars-alignは、状況が非常に良い、幸運であるという意味として使われています。',
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
            'body' => '僕を抑え込むものは何もないという意味。彼女といると自分は解放される、大胆で思い切った人間になれるという期待感。そんな彼女に自分の気持ちを今すぐ伝えなければという焦燥感を歌った曲',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'music_id' => '4nVBt6MZDDP6tRVdQTgxJg',
            'artist_name' => 'One Direction',
            'title' => "She told me in the morning she don't feel the same about us in her bones",
            'body' => "feel in one's bones で～を直感する、～を肌で感じる",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'music_id' => '4nVBt6MZDDP6tRVdQTgxJg',
            'artist_name' => 'One Direction',
            'title' => "I leave my heart open but it stays right here empty for days",
            'body' => 'it stays empty for days.の途中に副詞の right here が途中に入り込んでいる。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'music_id' => '5G2c6FsfTzgYUzageCmfXY',
            'artist_name' => 'One Direction',
            'title' => "You're my kryptonite.",
            'body' => 'kryptoniteとはアメリカの漫画スーパーマン中で描写されていた物質名で、スーパーマンの能力を封じて身動きをできなくする効果があります｡',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
    }
}
