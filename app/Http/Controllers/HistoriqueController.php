<?php
namespace App\Http\Controllers;

use DB;
use App\vehicule;
use App\statut;
use App\statut_vehicule;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use URL;
class HistoriqueController extends Controller
{

/**
 * gestion de l'hitorique
 *
 * @return \Illuminate\Http\Response
 */
    public function index($id){
         $vehicule = Vehicule::find($id);
         $statuts = Statut::all();
         return view('historique.index', compact('vehicule','id','statuts'));
    }

    public function getH($id){
        $vehicule = Vehicule::find($id);
        $data = array();
        foreach ($vehicule->statuts as $h) {
            $data[] = array(
                'end' =>$h->pivot->fin,
                'start' => $h->pivot->debut,
                'title' => strtoupper($vehicule->nom.' '.$vehicule->model).' en '.$h->libelle,
                'color' => $h->color
            );
        }

        return json_encode($data);
    }

    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'debut' => 'required',
            'fin' => 'required',
            'vehicule_id' => 'required',
            'statut_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/historique/reserver')
                ->withInput()
                ->withErrors($validator);
        }
        $h = New Statut_vehicule;
        $h->debut = implode('-', array_reverse(explode('-', $request->debut)));
        $h->fin = implode('-', array_reverse(explode('-', $request->fin)));
        $h->vehicule_id = $request->vehicule_id;
        $h->statut_id = $request->statut_id;

        if($h->save()){
            return redirect(URL::previous());
        }
    }

}

