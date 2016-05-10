<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Statut;
use App\Http\Controllers\Controller;

class StatutsController extends Controller
{




/**
 * Liste des statuts
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $statuts = Statut::all();

        return view('statuts.index', ['statuts' => $statuts]);
    }

}
