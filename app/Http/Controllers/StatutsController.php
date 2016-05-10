<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Statut;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
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

    public function indexAdd()
    {
        return view("statuts.add");
        
    }
    
    public function add(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
   
        $statut = New Statut;
        $statut->libelle= $request->name;
        if($statut->save()){
            return redirect('/statuts');
        }
    }
    
    public function indexEdit($id)
    {
        $statuts = Statut::where('id',$id)->get();
        return view('statuts.edit',['statuts' => $statuts]);
    }
        
    public function edit(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
   
        $statuts = Statut::findOrFail($request->id_statut);
        $statuts->libelle= $request->name;
        
        if($statuts->save()){
            return redirect('/statuts');
        }
    }    
    
    public function delete($id)
    {
        $statuts = Statut::where('id',$id)->get();
        $statuts->delete();
    }
}

