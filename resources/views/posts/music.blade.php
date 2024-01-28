<x-app-layout>
@foreach($result as $music)
<div class="flex justify-center">
    <div class="text-align:left">

        <div class="flex flex-row ">
            <img  src="{{$music["album"]["images"][1]["url"]}}" alt="" class="w-16 h-16" />
            <audio controls src="{{$music["preview_url"]}}" class="mt-2"></audio>
            <form method='get' action="/posts/create/{{$music["id"]}}">
                <input type='hidden' value='{{$music["id"]}}' name='music_id'>
                <button type='submit'>＜この曲について投稿する＞</button>
            </form>
        </div>
        アーティスト：{{$music["artists"][0]["name"]}}<br>
        曲名　　 ：{{$music["name"]}}</br></br>
    </div>
</div>
@endforeach
</x-app-layout>