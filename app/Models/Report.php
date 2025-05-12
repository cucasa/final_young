<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['reason', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
    public function reported()
    {
        return $this->morphTo();
    }
}

