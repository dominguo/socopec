<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\vehicule;
use App\vehicule_agence_statuts;
use App\Http\Controllers\Controller;
use App\Agence;
use App\Statut;
use Illuminate\Support\Facades\Validator;
class VehiculesController extends Controller
{

/**
 * Liste des statuts
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $vehicules = vehicule_agence_statuts::all();
        return view('vehicule.index', ['vehicules' => $vehicules]);
    }

    public function indexAdd()
    {
        $agences = Agence::all();
        $statuts = Statut::all();
        
        return view("vehicule.add",['agences' => $agences,'statuts' => $statuts]);        
    }
    
    public function add(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/GestionVehiculeAjouter')
                ->withInput()
                ->withErrors($validator);
        }
        $vehicule = New Vehicule;
        $vehicule->nom = $request->nom;
        $vehicule->model = $request->model;
        $vehicule->date_fabrication = $request->date_fabrication;
        $vehicule->hauteur = $request->hauteur;
        $vehicule->largeur = $request->largeur;
        $vehicule->poids = $request->poids;
        $vehicule->agence_id = $request->agence_id;
        $vehicule->statut_id = $request->statut_id;
        
        if($vehicule->save()){
            return redirect('/GestionVehicule');
        }else{
            
        }
    }
    
    public function indexEdit($id)
    {
        $vehicules = DB::table('vehicule_agence_statuts')->where('id',$id)->first();
        
        $statuts = Statut::all();
        $agences = Agence::all();
        return view('vehicule.edit',['vehicules' => $vehicules,'agences' => $agences, 'statuts' => $statuts]);
    }
        
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $vehicule = Vehicule::find($request->id_vehicule);
        $vehicule->nom = $request->nom;
        $vehicule->model = $request->model;
        $vehicule->date_fabrication = $request->date_fabrication;
        $vehicule->hauteur = $request->hauteur;
        $vehicule->largeur = $request->largeur;
        $vehicule->poids = $request->poids;
        $vehicule->agence_id = $request->agence_id;
        $vehicule->statut_id = $request->statut_id;

        if($vehicule->save()){
            return redirect('/GestionVehicule');
        }
    }    
    
    public function delete($id)
    {
        $vehicule = vehicule::destroy($id);
        return redirect('/GestionVehicule');
    }
}

