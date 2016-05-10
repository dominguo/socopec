<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    
    public function index()
    {
        $user = User::get();
        return view('agents.gestion_agents', [
            'agents' => $user
        ]);
    }
    
    /**
    * Liste des agents
    *
    * @return \Illuminate\Http\Response
    */
    public function loadUser($id)
    {
        $user = User::where('id',$id)->get();
        return view('agents.gestion_agents_modifier',['agents' => $user]);
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
   
        $user = User::findOrFail($request->id_user);
        $user->name= $request->name;
        $user->prenom = $request->prenom;
        if(strlen($request->password) > 0){
            $user->password = $request->password;
        }
        $user->num_tel = $request->num_tel;
        $user->num_fax = $request->num_fax;
        
        if($user->save()){
            return redirect('/GestionAgent');
        }
    }    
    
    public function indexAdd (){
        return view('agents.gestion_agents_ajouter');
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
   
        $user = New User;
        $user->name= $request->name;
        $user->prenom = $request->prenom;
        if(strlen($request->password) > 0){
            $user->password = $request->password;
        }
        $user->num_tel = $request->num_tel;
        $user->num_fax = $request->num_fax;
        
        if($user->save()){
            return redirect('/GestionAgent');
        }
    }
}
