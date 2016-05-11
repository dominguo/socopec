<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{

    public function statuts()
    {
        return $this->belongsToMany('App\Statut')->withPivot('debut', 'fin');
    }

}
