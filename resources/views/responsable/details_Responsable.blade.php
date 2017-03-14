	@extends('layouts.layout')
	@section('title','Groupe H')
	@section('nomPage','Liste des Responsables')

	@section('content')
	@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif
	<div class="row">
		<div class="col s12 m7">
			<div class="card card3">
				<div class="card-image ">
				<img id="logo" src="logo_rouge.png">
					<img src="logo_rouge.png">
				</div>
				<div class="card-content">
					<table>
						<tbody>
						<tr>
								<td><B>Titre  </B></td>
								<td>{{$resp->titreResp}}</td>
							</tr>
							<tr>
								<td><B>Civilité  </B></td>
								<td>{{$utilisateur->civilité}}</td>
							</tr>
							<tr>
								<td><B>Nom  </B></td>
								<td>{{$utilisateur->nomUtilisateur}}</td>
							</tr>
							<tr>
								<td><B>Prenom  </B>	</td>
								<td>{{$utilisateur->prenomUtilisateur}}</td>
							</tr>
							<tr>
								<td><B>Email  </B>	</td>
								<td>{{$utilisateur->mailUtilisateur}}</td>
							</tr>
							<tr>
								<td><B>Login  </B>	</td>
								<td>{{$utilisateur->login}}</td>
							</tr>
							<tr>
								<td><B>Téléphone  </B></td>
								<td>{{'0'.$utilisateur->portable}}</td>
							</tr>
							<tr>
								<td><B>Date de naissance  </B></td>
								<td>{{$utilisateur->ddn}}</td>
							</tr>
							<tr>
								<td><B>Date d'inscription  </B></td>
								<td>{{$utilisateur->dateInscription}}</td>
							</tr>
							
							
							@if(strcmp ("Administrateur",$resp->titreResp)==0)
							<td><a class="btn btn1 waves-effect waves-light" href="{{route('modif_responsable',$resp->id_Resp)}}"><i class="material-icons">edit</i></a></td>
							
							<td class="center">
								<form class="" action="{{route('delete_responsable',$resp->id_Resp)}}" method="post">
						        <input type="hidden" name="_method" value="delete">
						        <input type="hidden" name="_token" value="{{ csrf_token() }}">
						        <button type="submit" class="btn btn1 waves-effect waves-light"  onclick="return confirm('Voulez vous vraiment supprimer ce Responsable?');"><i class="material-icons">delete</i></button> 

						       
							</td>

							
							@endif

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
	

	@endsection


