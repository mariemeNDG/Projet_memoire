<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'etat',
        'secteur_activite',
        'budget',
        'duree',
        'equipe',
        'document',
        'accompagnement',
        'user_id'
    ];

    protected $casts = [
        'budget' => 'float',
        'duree' => 'integer',
        'equipe' => 'integer',
        'accompagnement' => 'array'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Méthode pour obtenir le badge selon l'état
    public function getEtatBadgeAttribute()
    {
        $badges = [
            'en cours' => 'bg-secondary',
            'en conception' => 'bg-warning',
            'en incubation' => 'bg-info',
            'labellisé' => 'bg-success',
            'en financement' => 'bg-primary'
        ];

        return '<span class="badge '.($badges[$this->etat] ?? 'bg-dark').'">'.ucfirst($this->etat).'</span>';
    }
}
