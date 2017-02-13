<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assemblée extends Model
{
    public $timestamps = 'false';
	protected $table = 'Assemblée';
	protected $primaryKey = 'id_Asmb';
	protected $fillable = array('titre', 'dateAsmb', 'heureDeb', 'heureFin', 'AssembleePrivee', 'coutParticipation','id_Resp','id_Membre','id_Utilisateur','id_Adresse');
}