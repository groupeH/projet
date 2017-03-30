<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historique;

class paiementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("membre.pouvoirCotiser");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("membre.pouvoirCotiser");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nomTitulaire'=>'required',
            'numCarte'=>'required|size:16',
            'dateCarte'=>'required|date',
            'crypto'=> 'required|size:3',
        ]);

        $cotisation = new Historique();
        $cotisation->dateDebut=('2013/01/12');
        $cotisation->dateFin=('2014/01/12');
        $cotisation->id_Membre=('1');
        $cotisation->id_Utilisateur=('1');
        $cotisation->id_Cotisation=$request->input('typeA');
        $cotisation->save();

        return redirect()->route('indexCotisation')->with('message','Paiement accepté');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("membre.pouvoirCotiser");
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



    }

}
