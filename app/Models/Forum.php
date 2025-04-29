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
}

