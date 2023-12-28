<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function favorites() {
        return $this->hasMany(Favorite::class);
    }
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id',
        'music_id'
        ];
        
    public function is_favorite()
    {
        //dd(!is_null(Favorite::where('post_id', $this->id)->where('user_id', Auth::id())->first()));
        return is_null(Favorite::where('post_id', $this->id)->where('user_id', Auth::id())->first());
    }
}
