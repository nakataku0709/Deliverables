<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>LyricLearn</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>＜詳細画面＞</h1>
        アーティスト：{{$music["artists"][0]["name"]}}<br>
        曲名　　 ：{{$music["name"]}}</br></br>
        <h3>＜キーフレーズ＞</h3>
        <h3 class='title'>
            {{ $post->title }}
        </h3>
        <div class='content'>
            <div class='content_post'>
                <h3>＜解説＞</h3>
                <p>{{ $post->body }}</p>
            </div>
            <div class='edit'>
                <a href="/posts/{{ $post->id }}/edit">編集</a>
            </div>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
        </div>
        <div class='comment'>
                @foreach($comments as $comment)
                    <h3>＜コメント＞</h3>
                    <h4>{{ $comment->user->name }}</h4>
                    <h4>{{ $comment->body }}</h4>
                @endforeach
        </div>
    </body>
</html>