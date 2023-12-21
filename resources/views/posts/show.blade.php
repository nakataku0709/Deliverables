<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>LyricLearn</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h2>＜キーフレーズ＞</h2>
        <h1 class='title'>
            {{ $post->title }}
        </h1>
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
                    <h4>{{ $comment->body }}</h4>
                @endforeach
        </div>
    </body>
</html>
