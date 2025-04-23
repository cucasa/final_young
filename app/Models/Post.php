<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

// Un post pertenece a un thread
public function thread()
{
    return $this->belongsTo(Thread::class);
}

// Un post pertenece a un usuario
public function user()
{
    return $this->belongsTo(User::class);
}

}
