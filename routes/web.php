<?php

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

Route::get('/', function () {
    return view('welcome');
});

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
