<?php

namespace App\Http\Controllers;
use App\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\DateTime;
//use Illuminate\Database\Query\Builder;
class Documentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deposerdoc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$file = $request -> file('fichierdepot');
        $destinationPath = 'Bureau';
        $file->move($destinationPath, $file->getClientOriginalName());*/
        $file = request()->file('fichierdepot');

       // $file = Input::file('photo');

        $name = $file->getClientOriginalName();
        //echo '<br>';

        //echo 'File extension : '. $file->getClientOriginalExtension();
        //echo '<br>';

        //Display File Real Path
      //echo 'File Real Path: '.$file->getRealPath();
      //echo '<br>';
   
      //Display File Size
      $taille = $file->getSize();
      //echo '<br>';
     echo $taille;
      //Display File Mime Type
      //echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      //Nous met le fichier dans le dossier Bureau.
      $destinationPath = 'Bureau';

      //$file->storeAs($destinationPath,$file->getClientOriginalName());

      if ($path = $file->storeAs($destinationPath,$file->getClientOriginalName()))
      {
        echo 'Fichier bien upload.';
        echo 'Chemin du fichier ' . $destinationPath;
      }
      else
        {
            echo 'Fichier mal upload';
        }
        //nous donne tout le chemin là/*storage_path('app').'/'*/ 
    // storage_path('app/public').'/'.$path;

       // return $path;
        $date = date("y.m.d");
       
        $document = new Document();
       // $document->id_Doc=('20');
        $document->url=($path);
        $document->taille=($taille);
        $document->dateParution=($date);
        $document->id_Resp=('4');
        $document->id_Membre=('3');
        $document->id_Utilisateur=('3');
        $document->save();

        return view('consulterDoc', array("path" => 'storage/'.$path, "name"=>$name));


}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
