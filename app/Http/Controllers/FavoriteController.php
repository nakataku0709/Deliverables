<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorite(Post $post, Request $request){
        $favorite=New Favorite();
        $favorite->post_id=$post->id;
        $favorite->user_id=Auth::user()->id;
        $favorite->save();
        return back();
    }
    
    public function unfavorite(Post $post, Request $request){
        $user=Auth::user()->id;
        $favorite=Favorite::where('post_id', $post->id)->where('user_id', $user)->first();
        $favorite->delete();
        return back();
    }
}
