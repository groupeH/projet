<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Responsable;
use App\Utilisateur;
use Validator;
use Illuminate\Support\Facades\Input;

class ResponsableController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //retourne la vue avec la liste des responsables
    public function index()
    {
        //$utilisateur = Utilisateur::findOrFail($id);
       

        $responsables = Responsable::allResponsable();
        return view('responsable.liste_Responsable', compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    //retourne la vue avec les détails d'un responsable
     public function show($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        $resp = Responsable::findResp($utilisateur->id_Utilisateur);
		return view('responsable.details_Responsable', compact('utilisateur','resp'));    
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Retourne la vue qui va permettre de modifier un responsable
    public function edit($id)
    {
        $responsable = Responsable::findOrFail($id);
        return view('responsable.modif_Responsable', compact('responsable'));  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Met à jour un responsable
    public function update($id)
    {
        //
        
        $rules =array('titre'=>'required');
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
         return "titre non saisie";

        }else {
            $responsable= Responsable::find($id);
        $responsable->titreResp = Input::get('titre');
        $responsable->save();

         return redirect()->route('liste_responsables')->with('message','Responsable mis à jour !');
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Supprime un responsable
    public function destroy($id)
    {
        //
        $responsable = Responsable::findOrFail($id);
        $responsable->delete();
 
          return redirect()->route('liste_responsables')->with('message','Responsable supprimé !');
    }
}
