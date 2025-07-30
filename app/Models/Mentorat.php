<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentorat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mentor_id',
        'projet_id',
        'domaine_accompagnement',
        'objectif_accompagnement',
        'disponibilites',
        'duree',
        'statut'
    ];

    protected $casts = [
        'domaine_accompagnement' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function getStatusBadgeAttribute()
    {
        $badges = [
            'En attente' => 'bg-warning',
            'Accepté' => 'bg-success',
            'Refusé' => 'bg-danger'
        ];

        return '<span class="badge '.$badges[$this->statut].'">'.$this->statut.'</span>';
    }
}
