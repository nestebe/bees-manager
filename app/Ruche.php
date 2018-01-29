<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruche extends Model
{  
    protected $fillable = 
    ['libelle', 
    'type',
    'etat',
    'nb_corps',
    'nb_hausses',
    'nb_cadres',
    'matiere',
    'orientation',
    'exposition',
    'estVide',
    'commentaire',
    'id_user',
    'id_colonie'
    ];

}
