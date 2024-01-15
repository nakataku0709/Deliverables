<x-app-layout>
    <div class='post'>
             @foreach ($posts as $post)
                <div class='post'>
                    <h2>＜キーフレーズ＞</h2>
                    <a href= "/posts/show/{{ $post->post->id }}">{{ $post->post->title }}</a>
                    <h3>＜解説＞</h3>
                    <p class='body'>{{ $post->post->body }}</p>
                    <span>
                    @if($post->post->is_favorite())
                    	<a href="{{ route('favorite', $post) }}" class="btn btn-secondary btn-sm">
                    		いいね
                    		<span class="badge">
                    			{{ $post->post->favorites->count() }}
                    		</span>
                    	</a>
                    @else
                        <a href="{{ route('unfavorite', $post) }}" class="btn btn-success btn-sm">
                    		いいね
                    		<span class="badge">
                    			{{ $post->post->favorites->count() }}
                    		</span>
                    	</a>
                    @endif
                    </span>
                    <a href= "/posts/show/{{ $post->post->id }}">コメント</a>
                    <span>
                    @if($post->post->is_bookmark())
                    	<a href="{{ route('bookmark', $post->post) }}" class="btn btn-secondary btn-sm">
                    		ブックマークする
                    	</a>
                    @else
                        <a href="{{ route('unbookmark', $post->post) }}" class="btn btn-success btn-sm">
                    		ブックマーク済み
                    	</a>
                    @endif
                    </span>
                    <form action="/posts/show/{{ $post->post->id }}" id="form_{{ $post->post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->post->id }})">削除</button>
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