@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Liste des Responsables')

@section('content')

@if(Session::has('message'))
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<span value={{Session::get('message')}}></span>
<script>
	$(document).ready(function(){
		Materialize.toast("{{Session::get('message')}}", 4000);
	});
</script>
	
@endif
<div class="container">
	<table class="highlight">
        <thead>
          <tr>
              <th data-field="civilite">H/F</th>
              <th data-field="titre">Titre</th>
              <th data-field="nom">Nom</th>
              <th data-field="prenon">Prénom</th>
              <th data-field="mail">Login</th>
           </tr>
        </thead>
         <tbody>
	@foreach ($responsables as $utilisateur)
		<tr>
			<td>{{$utilisateur->civilité}}</td>
			<td>{{$utilisateur->titreResp}}</td>
			<td>{{$utilisateur->nomUtilisateur}}</td>
			<td>{{$utilisateur->prenomUtilisateur}}</td>
			<td>{{$utilisateur->login}}</td>
			<td><a class="btn btn1 waves-effect waves-light" href="{{route('details_responsable',['responsable'=>$utilisateur->id_Utilisateur])}}"><i class="material-icons">send</i></a></td>
			
		</tr>

	@endforeach
			</tbody>
</table>
<td><a class="btn btn1 waves-effect waves-light right" href="{{route('liste_membres')}}"><i class="material-icons">note add</i></a></td>

</div>
  
		
@endsection


