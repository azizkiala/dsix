<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;

    protected $fillable = [
        'franc',
        'dollar',
        'nom',
        'post_nom',
        'prenom',
        'sexe',
        'trimestre',
        'classe',
        'cycle',
        'annee_frais',
        'moyekoli_id',
        'user_id',

    ];

    protected $tables = 'trimestres';
}
