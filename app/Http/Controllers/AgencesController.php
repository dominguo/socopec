<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Agence;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
class AgencesController extends Controller
{

/**
 * Liste des statuts
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $agences = Agence::all();
        return view('agences.index', ['agences' => $agences]);
    }

    public function indexAdd()
    {
        return view("agences.add");
        
    }
    
    public function add(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255',
            'ville' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/GestionAgenceAjouter')
                ->withInput()
                ->withErrors($validator);
        }
        $agence = New Agence;
        $agence->nom = $request->nom;
        $agence->adresse_1 = $request->adresse_1;
        $agence->adresse_2 = $request->adresse_2;
        $agence->adresse_3 = $request->adresse_3;
        $agence->code_postal = $request->code_postal;
        $agence->ville = $request->ville;
        $agence->num_tel = $request->num_tel;
        $agence->num_fax = $request->num_fax;

        if($agence->save()){
            return redirect('/GestionAgence');
        }
    }
    
    public function indexEdit($id)
    {
        $agences = Agence::where('id',$id)->get();
        return view('agences.edit',['agences' => $agences]);
    }
        
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255',
            'ville' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $agence = Agence::find($request->id_agence);
        $agence->nom = $request->nom;
        $agence->adresse_1 = $request->adresse_1;
        $agence->adresse_2 = $request->adresse_2;
        $agence->adresse_3 = $request->adresse_3;
        $agence->code_postal = $request->code_postal;
        $agence->ville = $request->ville;
        $agence->num_tel = $request->num_tel;
        $agence->num_fax = $request->num_fax;

        if($agence->save()){
            return redirect('/GestionAgence');
        }
    }    
    
    public function delete($id)
    {
        $agences = Agence::destroy($id);
        return redirect('/GestionAgence');
    }
}

