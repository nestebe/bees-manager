<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonie extends Model
{
    protected $fillable = 
    ['libelle', 
    'date_derniere_visite',
    'espece',
    'marquage',
    'agressivite',
    'clipage',
    'activite',
    'affectation1',
    'affectation2',
    'reine_presente',
    'commentaire',
    'id_user'
    ];
}
