<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['title', 'user_id', 'forum_id', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forum()
    { 
        return $this->belongsTo(Forum::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

