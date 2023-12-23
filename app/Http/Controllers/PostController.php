<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class PostController extends Controller
{
    public function index(Post $post, Favorite $favorite)
    {
        return view('posts/index')->with(['posts' => $post->get()]);  
        $favorite=Favorite::where('post_id', $post->id)->where('user_id', auth()->user()->id)->first();
        return view('posts/index', compact('post', 'favorite'));
    }
    
    public function show(Post $post, Comment $comment)
    {
        return view('posts/show')->with(['post' => $post])->with(['comments' => $comment->get()]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $input['user_id'] = \Auth::id();
        $input['category_id']=1;
        $input['music_id'] = \Auth::id();
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(Post $post, PostRequest $request)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
