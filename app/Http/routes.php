<?php
ue Illuminate\Http\Request;
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
 * statuts
 */
Route::get('/statuts', 'StatutsController@index');
Route::get('/GestionStatutsAjouter', 'StatutsController@indexAdd');
Route::post('/GestionStatutsAjouter', 'StatutsController@Add');
Route::get('/GestionStatutsModifier/{id}', 'StatutsController@indexEdit');
Route::post('/GestionStatutsModifier', 'StatutsController@Edit');
Route::get('/GestionStatutsSupprimer/{id}', 'StatutsController@delete');

/**
 * Agents
 */
Route::get('/photos', 'PhotosController@index');
Route::get('photo/get/{filename}', [
    'as' => 'getphoto', 'uses' => 'PhotosController@get']);
Route::post('photo/add/{vehicule}',[
        'as' => 'addphoto', 'uses' => 'PhotosController@add']);



Route::get('/GestionAgentAjouter','AgentController@indexAdd');
Route::post('/GestionAgentAjouter','AgentController@Add');
Route::get('/GestionAgent','AgentController@index');
Route::get('/GestionAgentModifier/{id}','AgentController@loadUser');
Route::post('/GestionAgentModifier','AgentController@edit');

/**
 * agences
 */
Route::get('/GestionAgence', 'AgencesController@index');
Route::get('/GestionAgenceAjouter', 'AgencesController@indexAdd');
Route::post('/GestionAgenceAjouter', 'AgencesController@Add');
Route::get('/GestionAgenceModifier/{id}', 'AgencesController@indexEdit');
Route::post('/GestionAgenceModifier', 'AgencesController@Edit');
Route::get('/GestionAgenceSupprimer/{id}', 'AgencesController@delete');

/**
 * vehicule
 */
Route::get('/GestionVehicule', 'VehiculesController@index');
Route::get('/GestionVehiculeAjouter', 'VehiculesController@indexAdd');
Route::post('/GestionVehiculeAjouter', 'VehiculesController@Add');
Route::get('/GestionVehiculeModifier/{id}', 'VehiculesController@indexEdit');
Route::post('/GestionVehiculeModifier', 'VehiculesController@Edit');
Route::get('/GestionVehiculeSupprimer/{id}', 'VehiculesController@delete');
