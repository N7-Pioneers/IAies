<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityAgent extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'password', 'matches_affectes'];

    // Définissez la relation avec les matches affectés
    public function matchesAffectes()
    {
        return $this->hasMany(Matche::class, 'id', 'matches_affectes');
    }
}