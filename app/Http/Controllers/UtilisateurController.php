<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Utilisateur;
use App\Http\Controllers\Controller;
use DB;

class UtilisateurController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //retourne la liste des utilisateurs
    public function index()
    {

        $utilisateurs= Utilisateur::all()->sortBy("nomUtilisateur");
       // dd($utilisateurs) ;
        return view('responsable/liste_Utilisateurs', compact('utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$utilisateurs = New Utilisateur;
        $utilisateurs=>('nomUt');
        $utilisateurs->('prenom');
        $utilisateurs->('mail');
        $utilisateurs->('mdp');

        $utilisateurs->save();*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Retourne la vue des détails d'un utilisateur
    public function show(Utilisateur $utilisateur)
    {
        //
        return view('responsable/details_Utilisateur', compact('utilisateur'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
