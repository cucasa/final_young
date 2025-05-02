<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{ 
    protected $fillable = ['name', 'description', 'category_id'];

    // Un foro pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un foro puede tener muchos hilos
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    // Un foro pertenece a un usuario (creador)
    public function user()
    {
     return $this->belongsTo(User::class);
    }



}

