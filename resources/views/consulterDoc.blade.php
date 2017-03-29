 
@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Consulter les documents')

@section('content')
    
    <div id="row1" class="row">
        <h4>Veuillez choisir le document à consulter :</h4>
    </div>

   <a href="{{$path}}" download="{{$name}}">Télécharger ici</a>

@endsection
