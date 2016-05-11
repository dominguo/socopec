<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\vehicule;
use App\Http\Controllers\Controller;
use App\Agence;
use App\probleme;
use Illuminate\Support\Facades\Validator;
class ProblemesController extends Controller
{

/**
 * Liste des statuts
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $problemes = probleme::all();
        return view('problem.index', ['problemes' => $problemes]);
    }

    public function indexAdd()
    {
        $vehicules = Vehicule::all(); 
        return view("problem.add",['vehicule' => $vehicules]);        
    }
    
    public function add(Request $request)
    {        
        $problem = New probleme;
        $problem->commentaire = $request->commentaire;
        $problem->vehicule_id = $request->vehicule_id;
        $problem->active = 1;
        if($problem->save()){
            return redirect('/GestionProbleme');
        }else{
            
        }
    }
    
    public function indexEdit($id)
    {
        $vehicules = Vehicule::all();
        $problemes = DB::table('problemes')->where('id',$id)->first();
        
        $problemes = probleme::find($id);
        return view('problem.edit',['vehicules' => $vehicules,'problemes' => $problemes]);
    }
        
    public function edit(Request $request)
    {


        $problem = probleme::find($request->id_probleme);
        $problem->commentaire = $request->commentaire;
        $problem->vehicule_id = $request->vehicule_id;
        $problem->active = $request->active;

        if($problem->save()){
            return redirect('/GestionProbleme');
        }
    }    
    
}

