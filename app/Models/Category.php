<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }
}
