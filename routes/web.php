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

Route::get('/membre.pouvoirCotiser', function (){
    return view('membre.pouvoirCotiser');
});

Route::resource('cotisation','paiementController');
Route::get('membre.pouvoirCotise', 'paiementController@create')->name('createCotisation');
Route::get('membre.pouvoirCotiser', 'paiementController@index')->name('indexCotisation');
//Route::post('membre.pouvoirCotiser','paiementController@store')->name('storeCotisation');

Route::get('/membre.donnerDons', function (){
    return view('membre.donnerDons');
});
Route::post('membre.pouvoirCotiser','paiementController@index');
Route::get('membre.donnerUnDons', 'donsController@create')->name('createDon');
Route::post('/membre.donnerDons','donsController@store')->name('createStore');
Route::get('/membre.donnerDons', 'donsController@index')->name('indexDon');




Route::get('/', function (){
    return view('Accueil');
});


Route::get('/deposerdoc', 'Documentcontroller@create');
Route::post('/deposerdoc', 'Documentcontroller@store');


Route::get('/consulterDoc', function(){
	return view('consulterDoc');
});

Route::resource('membre', 'MembreController');

Auth::routes();


Route::get('/home', 'HomeController@Accueil');

