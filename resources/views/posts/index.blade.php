<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>LyricLearn</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>LyricLearn</h1>
        <a href="/posts/create">投稿</a>
        <div class='post'>
             @foreach ($posts as $post)
                <div class='post'>
                    <a href= "/posts/{{ $post->id }}">{{ $post->title }}</a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id}}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">削除</button>
                    </form>
                </div>
            @endforeach
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
