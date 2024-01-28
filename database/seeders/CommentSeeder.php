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
            'body' => '自分に自信がない内気な女の子。周りがどう思っているかが不安で、いつもメイクをして素顔を隠している。周りはみんな綺麗だと思っているのに、なぜか自分に自信がない。”「君」ほど綺麗だったらもっと自信をもってもいいのになぁ”そんな声が聞こえてきそう。主人公は、そんな内気だけど綺麗な彼女に恋をしているようですね。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '1',
            'body' => 'insecure＜意味＞人が不安な ・I feel so insecure! : 私はとても不安です。・When did you get so insecure? : あなたはいつそんなに不安になったのですか？・Is that enough to make you feel insecure? : そのくらいのことで心配になるわけ？◆多少からかうような語気。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '2',
            'body' => "alignin'は動詞alignの現在分詞です。一般的な意味は、一直線にする、一列に整列させる。",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '2',
            'body' => "align'はaligningでクオーテーションマークでingを省略しています。",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '2',
            'body' => '「星が一列に並ぶ」から転じて、何かをするのにとても良かったりラッキーな状況であることを指します。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '3',
            'body' => 'hold backの意味は、「引き留める」「（感情を）抑えておく」',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
    }
}
