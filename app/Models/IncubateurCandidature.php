<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncubateurCandidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'incubateur_id',
        'projet_id',
        'user_id',
        'motivation',
        'business_plan',
        'equipe',
        'budget_previsionnel',
        'duree_incubation',
        'besoins_specifiques',
        'statut',

    ];

    protected $casts = [
        'equipe' => 'array',
        'besoins_specifiques' => 'array',
        'date_entretien' => 'datetime',
        'budget_previsionnel' => 'decimal:2'
    ];

    public function incubateur()
    {
        return $this->belongsTo(Incubateur::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusBadgeAttribute()
    {
        $statuses = [
            'en_attente' => ['badge' => 'bg-secondary', 'text' => 'En attente'],
            'en_revue' => ['badge' => 'bg-info', 'text' => 'En revue'],
            'entretien' => ['badge' => 'bg-primary', 'text' => 'Entretien programmé'],
            'accepte' => ['badge' => 'bg-success', 'text' => 'Accepté'],
            'refuse' => ['badge' => 'bg-danger', 'text' => 'Refusé'],
            'liste_attente' => ['badge' => 'bg-warning', 'text' => 'Liste d\'attente']
        ];

        return '<span class="badge '.$statuses[$this->statut]['badge'].'">'
              .$statuses[$this->statut]['text'].'</span>';
    }
}
