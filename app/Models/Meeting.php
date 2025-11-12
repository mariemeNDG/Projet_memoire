<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
     protected $fillable = [
        'projet_id',
        'date_session',
        'duree',
        'type',
        'description',
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}
