<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        // Una categoría puede tener muchos artículos
        public function articles()
        {
            return $this->hasMany(Article::class);
        }
}
