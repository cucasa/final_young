<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
     // Un foro puede tener muchos threads
     public function threads()
     {
         return $this->hasMany(Thread::class);
     }
}
