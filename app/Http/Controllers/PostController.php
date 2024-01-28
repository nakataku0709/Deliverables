<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Bookmark;
use Spotify;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function show(Post $post, Comment $comment)
    {
        //dd($post);
        $music=Spotify::track($post->music_id)->get();
        return view('posts/show')->with(['music' => $music, 'post' => $post, 'comments' => $comment->where('post_id', $post->id)->get()]);
    }
    
    public function create(Request $request, Category $category)
    {
        //dd($request->music_id);
        $music=Spotify::track($request->music_id)->get();
        //dd($music);
        return view('posts/create')->with(['music' => $music, 'categories' => $category->get()]);
    }
    
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        //dd($input);
        $input['user_id'] = \Auth::id();
        $post->fill($input)->save();
        return redirect('/posts/show/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(Post $post, PostRequest $request)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/show/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    public function search()
    {
        $search = Spotify::searchTracks($_GET['q'])->limit(10)->get();
        //dd($search);
        $result = $search["tracks"]["items"];
        return view("posts.music")->with(["result"=>$result]);
    }
    
    public function bookmark(Bookmark $bookmark)
    {
        $post = $bookmark::where('user_id', Auth::id()) -> get();
        return view('posts/bookmark')->with(['posts' => $post]);
    }
}
