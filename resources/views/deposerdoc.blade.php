@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Déposer un document')

@section('content')
	<!--<h1>Déposer des documents : </h1>-->
<!-- <form method="POST" action="C:\wamp\www\projetS4\projet\routes\web.php" enctype="multipart/form-data">	
     Le contenu du formulaire est à placer ici... 
     <label name="depotdoc" value="Déposer le document"></label>
     <input type="file" name="fichierdepot">
     <input type="submit" name="Mettre en ligne" > -->
    {{Form::open(array('url' => 'deposerdoc'))}}
	{{ Form::label('depotdoc', 'Déposer le document : ')}}
	{{ Form::file('fichierdepot')}}
	{{ Form::submit('Mettre en ligne')}}
    {{ Form::close()}}

@endsection
