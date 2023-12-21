<x-app-layout>
        <h1>LyricLearn</h1>
        <a href="/posts/create">投稿</a>
        <div class='post'>
             @foreach ($posts as $post)
                <div class='post'>
                    <h2>＜キーフレーズ＞</h2>
                    <a href= "/posts/{{ $post->id }}">{{ $post->title }}</a>
                    <h3>＜解説＞</h3>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
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
</x-app-layout>
