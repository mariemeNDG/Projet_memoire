<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accompagnement extends Model
{
    protected $fillable = [
        'user_id',
        'mentorat_id',
        'projet_id',
        'messages',
        'disponibilites',
        'domaine_accompagnement',
    ];

    protected $casts = [
        'domaine_accompagnement' => 'array',
    ];

    public function mentor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mentorat()
    {
        return $this->belongsTo(Mentorat::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    
}
