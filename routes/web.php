<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/listeMembre', function (){
    return view('membre.listeMembre');
});



//Permet d'accèder à la liste des utlisateurs	
Route::get('utilisateurs','UtilisateurController@index')->name('liste_utilisateurs');

//Permet d'accèder aux informations d'un utilisateur
Route::get('utilisateurs/{utilisateur}','UtilisateurController@show')->name('details_Utilisateur');

//Permet d'accèder à la liste des responsables
Route::get('responsables','ResponsableController@index')->name('liste_responsables');

//Permet de supprimer un responsable
Route::delete('responsables/{id}','ResponsableController@destroy')->name('delete_responsable');

//Permet d'accèder aux informations d'un responsable
Route::get('responsables/{responsable}','ResponsableController@show')->name('details_responsable');

//Permet de mettre à jour un responsable
Route::get('responsables/{id}/edit','ResponsableController@edit')->name('modif_responsable');
Route::put('responsables/{id}/edit','ResponsableController@update')->name('update_responsable');

Route::get('membres','MembreController@index')->name('liste_membres');


Route::get('/login', function (){
    return view('login');
});

Route::get('/', function (){
    return view('Accueil');
});

Route::get('/deposerdoc', 'Documentcontroller@create');
Route::post('/deposerdoc', 'Documentcontroller@store');

Route::get('/login', function (){
    return view('login');
});

Route::get('/Accueil', function (){
    return view('Accueil');
});


//Route renvoyant la page deposerDoc au moment de la création de la page.
Route::get('/deposerdoc', 'Documentcontroller@create');

//Route renvoyant la page deposerDoc une fois le document stocké dans la base de données.
Route::post('/deposerdoc', 'Documentcontroller@store');
//Route renvoyant la page deposerDoc au moment de l'affichage initiale de la page.
Route::get('/deposerdoc', 'Documentcontroller@index');
//Route renvoyant la page deposerDoc au moment de l'affichage de la page.
Route::get('/deposerdoc', 'Documentcontroller@show');
//Route renvoyant la page consulterDoc au moment de l'affichage de la page.
Route::get('/consulterDoc', 'Documentcontroller@show');
//Méthode permettant de supprimer un document de la bd et de la vue.
Route::group(['middleware'=>['web']],function(){

Route::resource('deposerdoc','Documentcontroller');
});

Route::get('/consulterDoc', function(){
	return view('consulterDoc');
});

Route::resource('membre', 'MembreController');

// Accès page liste assemblées côté membre
Route::get('/listeAssemblee', 'AssembleeController@indexMembre');
// Route afin d'ajouter la participation du membre à une assemblée
Route::post('/listeAssemblee/participer', 'ParticipantController@ajouter');
// Route afin de supprimer la participation du membre à une assemblée
Route::post('/listeAssemblee/desinscrire', 'ParticipantController@supprimer');

