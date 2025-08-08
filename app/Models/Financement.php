<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financement extends Model
{
    use HasFactory;

    protected $fillable = [
        'projet_id', 'type', 'montant', 'description', 'statut', 'document'
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function investissements()
    {
        return $this->hasMany(Investissement::class);
    }
}

