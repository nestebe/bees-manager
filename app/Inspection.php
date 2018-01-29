<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = 
    ['date_visite', 
    'activite',
    'nb_cadres_cuvain',
    'nb_cadres_pollen',
    'nb_cadres_miel',
    'estMalade',
    'maladie',
    'traitement',
    'date_prochaine_visite',
    'commentaire',
    'id_user',
    'id_ruche'
    ];

}
