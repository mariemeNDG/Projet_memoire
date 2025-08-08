<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investissement extends Model
{
    protected $fillable = [
        'user_id',
        'financement_id',
        'montant',
        'message',
        'statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financement()
    {
        return $this->belongsTo(Financement::class);
    }

}
