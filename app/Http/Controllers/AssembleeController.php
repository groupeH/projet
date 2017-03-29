<?php

namespace App\Http\Controllers;
use App\Adresse;
use App\Assemblee;
use App\Participant;
use App\Utilisateur;
use App\Responsable;
use DB;
use Illuminate\Http\Request;

class AssembleeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        //
        $assemblees = Assemblee::all()->sortBy("dateAsmb");
        return view('responsable/GestionAssemblé', compact('assemblees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $responsable = Responsable::allResponsable();
        return view('responsable.creerAssemblee', compact('responsable') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //creer assemblée
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'titreAsmb'=>'required',
            'dateAsmb'=>'required',
            'heureDeb'=>'required',
            'heureFin'=>'required',
            'assembleePrivee'=>'required',
            'coutParticipation'=>'required',
            'id_Resp'=>'required',
            'rue'=>'required',
            'ville'=>'required',
            'pays'=>'required',
            'num'=>'required',

        ]);
        $assemblee= new Assemblee;
        $adresse=new Adresse;
        $assemblee->titreAsmb = $request->input('titreAsmb');
        $assemblee->dateAsmb =$request->input('dateAsmb');
        $assemblee->heureDeb=$request->input('heureDeb');
        $assemblee->heureFin=$request->input('heureFin');
        $assemblee->assembleePrivee=$request->input('assembleePrivee');
        $assemblee->coutParticipation=$request->input('coutParticipation');
        $assemblee->id_Resp=$request->input('id_Resp');
        $adresse->libelle=$request->input('rue');
        $adresse->ville=$request->input('ville');
        $adresse->pays=$request->input('pays');
          if(empty($request->input('infoSup'))){

        $adresse->info_suplementaire = "";

    }else{
              $adresse->info_suplementaire=$request->input('infoSup');

          }
        $adresse->num=$request->input('num');
        $adresse->save();
        $assemblee->id_Adresse=$adresse->id_Adresse;

        $assemblee->save();
        return redirect()->action('AssembleeController@index')->with('alert-sucess','Dat hasbeen saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_Asmb)
    {
        //
        $assemblee = Assemblee::findOrFail($id_Asmb);
        $adresse=Adresse::findOrFail($assemblee->id_Adresse);
        $responsable = Responsable::findOrFail($assemblee->id_Resp);
        $utilisateur = Utilisateur::findOrFail($responsable->id_Utilisateur);
        $donnee = DB::table('Membre')
            ->join('Participant','Participant.id_Membre','=','Membre.id_Membre')
            ->join('Utilisateur','Membre.id_Utilisateur','=','Utilisateur.id_Utilisateur')
            ->select('Participant.*','Membre.*','Utilisateur.*')
            ->where('id_Asmb',$id_Asmb)
            ->distinct(['Membre.id_Membre'])
            ->get();
        //   dd($assemblee);
         return view('responsable.DetailAssemblee', compact('assemblee','adresse','utilisateur','responsable','donnee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Asmb)
    {
        //
        $assemblee = Assemblee::findOrFail($id_Asmb);
        $adresse=Adresse::findOrFail($assemblee->id_Adresse);


        $responsable = Responsable::allResponsable();

        Return view('responsable.Update',compact('assemblee','responsable','adresse','asmbResp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Asmb)
    {
        //
        $this->validate($request,[
        ]);
        $assemblee = Assemblee::findOrFail($id_Asmb);
        $adresse=Adresse::findOrFail($assemblee->id_Adresse);
        if(!empty($request->input('titreAsmb'))){
            $assemblee->titreAsmb = $request->input('titreAsmb');
        }
        if(!empty($request->input('dateAsmb'))){
            $assemblee->dateAsmb =$request->input('dateAsmb');
        }  if(!empty($request->input('heureFin'))){
        $assemblee->heureFin=$request->input('heureFin');
        }
        if(!empty($request->input('heureDeb'))){
        $assemblee->heureDeb=$request->input('heureDeb');
        }
        if(!empty($request->input('assembleePrivee'))){
            $assemblee->assembleePrivee=$request->input('assembleePrivee');
        }
        if(!empty($request->input('coutParticipation'))){
            $assemblee->coutParticipation=$request->input('coutParticipation');
        }
        if(!empty($request->input('id_Resp'))){
            $assemblee->id_Resp=$request->input('id_Resp');
        }
        if(!empty($request->input('rue'))){
            $adresse->libelle=$request->input('rue');
        }
        if(!empty($request->input('ville'))){
             $adresse->ville=$request->input('ville');
        }
        if(!empty($request->input('pays'))){
            $adresse->pays=$request->input('pays');
        }
        if(!empty($request->input('infoSup'))){
            $adresse->info_suplementaire=$request->input('infoSup');
        }
        if(!empty($request->input('num'))){
            $adresse->num=$request->input('num');
        }
        $adresse->save();
        $assemblee->id_Adresse=$adresse->id_Adresse;
        $assemblee->save();
        return redirect()->action('AssembleeController@index')->with('alert-sucess','Dat hasbeen saved!');
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
        $assemblee = Assemblee::findOrFail($id);
      //  dd($assemblee);
        $assemblee->delete();
        return redirect()->action('AssembleeController@index')->with('alert-success','Data Hasbeen Saved!');


    }

    public function indexMembre() {
        $liste = Assemblee::getAssembleesPubliques();
        $participantControl = new ParticipantController();
        return view('membre.listeAssemblee', compact('liste', 'participantControl'));
    }

}
