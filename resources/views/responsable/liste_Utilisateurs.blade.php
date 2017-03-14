@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Liste des utilisateurs')

@section('content')

  <table class="highlight">
        <thead>
          <tr>
              <th data-field="civilite">H/F</th>
              <th data-field="nom">Nom</th>
              <th data-field="prenon">Prénom</th>
              <th data-field="mail">Mail</th>
           </tr>
        </thead>
         <tbody>
	@foreach ($utilisateurs as $utilisateur)
		<tr>
			<td>{{$utilisateur->civilité}}</td>
			<td>{{$utilisateur->nomUtilisateur}}</td>
			<td>{{$utilisateur->prenomUtilisateur}}</td>
			<td>{{$utilisateur->mailUtilisateur}}</td>
			<td><a class="btn btn1 waves-effect waves-light" href="{{route('details_Utilisateur',['responsable'=>$utilisateur->id_Utilisateur])}}">voir</a></td>

		</tr>

	@endforeach
			</tbody>
</table>
		
@endsection


     