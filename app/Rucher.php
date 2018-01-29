<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Rucher extends Model
{     
    protected $fillable = 
    ['libelle', 
    'description',
    'adresse1',
    'adresse2',
    'adresse3',
    'cp',
    'latitude',
    'longitude',
    'ville',
    'id_user'
    ];
  /*  protected $attributes = [
        'id_user' => Auth::user()->id
    ];*/
    public function getUser()
    {
        
        return User::findOrFail($this->user_id);
    }
}
