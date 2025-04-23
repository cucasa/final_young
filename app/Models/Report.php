<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
        // Un reporte pertenece a un usuario
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        // Relación polimórfica a article o comment
        public function reportable()
        {
            return $this->morphTo();
        }
}
