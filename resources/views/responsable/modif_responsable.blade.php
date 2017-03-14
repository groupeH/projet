@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Modifier Responsable')

@section('content')

<br></br>
<p><B>TITRE ACTUEL: </B> {{$responsable->titreResp}}</p>
<div class="form-group">
{!! Form::model($responsable,array('route' => ['update_responsable', $responsable->id_Resp],'method'=>'PUT')) !!}
    {!! Form::label('title', 'Nouveau titre ', ['class' => 'control-label']) !!}
    {!! Form::text('titre', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Enregistrer', ['class' => 'btn btn1 waves-effect waves-light']) !!}

{!! Form::close() !!}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			//var $titre = $('#titre');
			var	$btn = $('.btn btn1 waves-effect waves-light');

			$btn.click(function(e){
		        e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

		        // puis on lance la fonction de vérification sur tous les champs :
		        //verifier($titre);
		        var $titre = $('#titre');
		        if($titre.val() == ""){ // si le champ est vide
			        	$btn.prop('disabled', true);
			            $titre.css({ // on rend le champ rouge
			    	        borderColor : 'red',
			    	        color : 'red'
			    	    });
			        }
			        else {
			        	$btn.prop('disabled', false);

			        }
		    });
			/* function verifier(champ){
			        if(champ.val() == ""){ // si le champ est vide
			        	$btn.prop('disabled', true);
			            champ.css({ // on rend le champ rouge
			    	        borderColor : 'red',
			    	        color : 'red'
			    	    });
			        }
			        else {
			        	$btn.prop('disabled', false);

			        }
			    } */

		});
	</script>

@endsection


