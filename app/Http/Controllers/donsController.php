<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Don;

class donsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("/membre.donnerDons");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/membre.donnerDons");

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
            'montantDon'=>'required',
        ]);

        $don = new Don();
        $don->id_Don=('3');
        $don->dateDon=('23/12/18');
        $don->montantDon=$request->input('montantDon');
        $don->id_Utilisateur=('1');
        $don->save();

        return redirect()->route('indexDon')->with('message','Paiement accepté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("/membre.donnerDons");
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

