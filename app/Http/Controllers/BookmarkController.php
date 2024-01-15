<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function bookmark(Post $post){
        $bookmark=New Bookmark();
        $bookmark->post_id=$post->id;
        $bookmark->user_id=Auth::user()->id;
        $bookmark->save();
        return back();
    }
    
    public function unbookmark(Post $post){
        $user=Auth::user()->id;
        $bookmark=Bookmark::where('post_id', $post->id)->where('user_id', $user)->first();
        $bookmark->delete();
        return back();
    }
}
