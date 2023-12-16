<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    protected $fillable = ['team1', 'score1', 'team2', 'score2', 'duree', 'date'];

   
}
