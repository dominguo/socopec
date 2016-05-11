<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{

    public function vehicules()
    {
        return $this->belongsToMany('App\Vehicule')->withPivot('debut', 'fin');
    }

}
