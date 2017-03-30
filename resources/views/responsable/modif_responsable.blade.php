@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Modifier Responsable')

@section('content')

<br></br>
<p><B>TITRE ACTUEL: </B> {{$responsable->titreResp}}</p>
<div class="form-group">
{!! Form::model($responsable,array('route' => ['update_responsable', $responsable->id_Resp],'method'=>'PUT')) !!}
    {!! Form::label('title', 'Nouveau titre ', ['class' => 'control-label']) !!}
    {!! Form::text('titre', null, ['class' => 'form-control', 'id' => 'titre']) !!}


{!! Form::submit('Enregistrer', ['class' => 'btn btn1 waves-effect waves-light', 'id' => 'btnForm']) !!}

{!! Form::close() !!}
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			var	$btn = $('#btnForm');

			$btn.click(function(e){
				var $titre = $('#titre');
		        //on lance la fonction de vérification sur le champ de texte :
		        if($titre.val() == ""){ // si le champ est vide
		        	// on annule la fonction par défaut du bouton d'envoi
		        	e.preventDefault();
			       	Materialize.toast('Titre non saisi', 4000);
			           $titre.css({ // on rend le champ rouge
			            borderColor : 'red',
			            color : 'red'
			        });
			    }
		    });
		});
	</script>

@endsection


