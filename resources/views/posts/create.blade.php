<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>LyricLearn</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>投稿</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>キーフレーズ</h2>
                    <input type="text" name="post[title]" placeholder="キーフレーズ" value="{{ old('post.title') }}">
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>解説</h2>
                <textarea name="post[body]" placeholder="解説">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type='hidden' value='{{$music["artists"][0]["name"]}}' name='post[artist_name]'>
            <input type='hidden' value='{{$music["name"]}}' name='post[music_name]'>
            <input type='hidden' value='{{$music["preview_url"]}}' name='post[preview]'>
            <input type='hidden' value='{{$music["id"]}}' name='post[music_id]'>
            <input type="submit" value="投稿">
        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
