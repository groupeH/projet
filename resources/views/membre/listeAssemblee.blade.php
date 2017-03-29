@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Liste Assemblee')

@if(!Session::has('id_Membre') || Session::has('id_Responsable'))
	<?php Redirect::to('/home')->send(); ?>
@endif

@section('content')
	<!-- RECUPERATION DE LA LISTE DES ASSEMBLEES PUBLIQUES-->
	<?php $i = 0 ?>
	<!-- CREATION DES CARTES, 1 CARTE PAR ASSEMBLEE-->
	@foreach ($liste as $ligne)
		@if($i == 0)
			<div id="row1" class="row">
		@endif
		<div class="col s12 m4">
			<div class="card blue-grey darken-1">
				<!-- HAUT DE LA CARTE ---------------------------------------------------------------------------------------- -->
				<div id="crd" class="card-content white-text grey darken-2">
					<!-- TITRE -->
					<span class="card-title">Titre : {{$ligne->titreAsmb}}</span>
					<!-- DATE - HEURE - ADRESSE - PRIX -->
					<p>Date : {{$ligne->dateAsmb}}</p>
					<p>Heure Début : {{$ligne->heureDeb}}<span style="margin-right: 30px"></span> Heure Fin : {{$ligne->heureFin}}</p>
					<p>Adresse : {{$ligne->num." ".$ligne->libelle.", ".$ligne->ville.", ".$ligne->pays}}</p>
					<p>Complement : {{$ligne->info_suplementaire}}</p>
					<p>Prix : {{$ligne->coutParticipation}}€</p> 
				</div>
				<!-- BAS DE LA CARTE ---------------------------------------------------------------------------------------- -->
				<div class="card-action grey darken-2">
					<!-- BOUTON PARTICIPATION -->
					<?php $participe = $participantControl->getParticipation(1, $ligne->id_Asmb); ?>
					<form method="post" action="{{ count($participe) == 0 ? "/listeAssemblee/participer" : "/listeAssemblee/desinscrire" }}" class="waves-effect waves-light btn btn1">
						{{ csrf_field() }}
						<input name="idMembre" value="{{Session::get('id_Membre')}}" style="display: none"/>
						<input name="valAsmb" value="{{ $ligne->id_Asmb }}" style="display: none"/>
						<input type="submit" class="formBtn" value="{{ count($participe) ? "Se desinscrire" : "Participer" }}"/>
					</form>
				</div>
			</div>
		</div>
		@if($i == 1)
			</div>
		@endif
		<?php ($i == 0 ? $i = $i + 1 : $i = 0); ?>
	@endforeach
	
	<!-- AJAX POUR ENVOYER PARTICIPATION/DESINSCRIPTION A UNE ASSEMBLEE SANS CHANGER DE PAGE ------------------------------------------------------------------- -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.formBtn').click(function(e) {
				var elem = $(this);
				e.preventDefault();
				// PARTICIPATION
				if($(this).val() == "Participer") {
					$.ajax({
						type: "POST",
						url: $(this).parent().attr('action'),
						data: $(this).parent().serialize(),
						success: function(msg) {
							elem.attr('value', "Se desinscrire");
							elem.parent().attr('action', "/listeAssemblee/desinscrire");
							Materialize.toast(msg, 4000);
						}
					});
				}
				// DESINSCRIPTION
				else {
					$.ajax({
						type: "POST",
						url: $(this).parent().attr('action'),
						data: $(this).parent().serialize(),
						success: function(msg) {
							elem.attr('value', "Participer");
							elem.parent().attr('action', "/listeAssemblee/participer");
							Materialize.toast(msg, 4000);
						}
					});
				}
			});
		});
	</script>
@endsection