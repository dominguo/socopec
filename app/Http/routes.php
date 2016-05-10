<?php
use Illuminate\Http\Request; 
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/**
 * list statuts
 */
Route::get('/statuts', 'StatutsController@index');

/**
 * Delete Task
 */
Route::delete('/statut/supprimer/{id}', function (Task $id) {
    return view('statuts/delete');
});




/**
 * Liste des agents
 */
Route::get('/GestionAgent', function () {
    $user = User::get();
    return view('gestion_agents', [
        'agents' => $user
    ]);
});


/**
 * Suppression logique
 */
Route::get('/GestionAgentModifier/{id}', function ($id) {
   $user = User::findOrFail($id)->get();
   return view('gestion_agents_modifier',['agents' => $user]);
});

Route::post('/GestionAgentModifier', function (Request $request) {
    
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
        return redirect('/');
    }
});