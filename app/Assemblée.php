<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assemblée extends Model
{
    public $timestamps = 'false';
	protected $table = 'Assemblée';
	protected $primaryKey = 'id_Assemblée';
	protected $fillable = array('titre', 'dateEv', 'heureDeb', 'heureFin', 'evenementPrivé', 'coutParticipation');
}

// Ecrit par Thibaud ROBIN - www.thibaud-robin.com