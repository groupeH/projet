<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Response;
use App\Participant;

class ParticipantController extends Controller
{
    public function supprimer() {
    	Participant::supprimer(Input::get('idMembre'), Input::get('valAsmb'));
		return Response::json('Vous êtes maintenant desinscrit', 200);
	}
	
	public function ajouter() {
		Participant::ajouter(Input::get('idMembre'), Input::get('valAsmb'));
		return Response::json('Vous êtes maintenant inscrit', 200);
	}

	public function getParticipation($idMembre, $idAsmb) {
		return Participant::getParticipation($idMembre, $idAsmb);
	}
}