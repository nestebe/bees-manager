<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolte extends Model
{
    protected $fillable = 
    ['quantite', 
    'unite',
    'type_recolte',
    'commentaire',
    'id_user',
    'id_ruche'
    ];
}
