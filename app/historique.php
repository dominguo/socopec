<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historique extends Model
{
    public function vehicules(){
        return $this->belongsToMany('App\Vehicule');
    }
    public function statuts(){
        return $this->hasMany('App\Statut');
    }
}
