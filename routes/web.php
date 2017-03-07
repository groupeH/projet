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


Route::get('/login', function (){
    return view('login');
});

Route::get('/', function (){
    return view('Accueil');
});

Route::get('/deposerdoc', 'Documentcontroller@create');
Route::post('/deposerdoc', 'Documentcontroller@store');


Route::get('/consulterDoc', function(){
	return view('consulterDoc');
});

Route::ressource('membre', 'MembreController');

Route::get('/inscription', function (){
    return view('inscription');
});
