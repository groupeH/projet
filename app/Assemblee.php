<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Assemblee extends Model
{
    public $timestamps = 'false';
	protected $table = 'Assemblée';
	protected $primaryKey = 'id_Asmb';
	protected $fillable = array('titre', 'dateAsmb', 'heureDeb', 'heureFin', 'AssembleePrivee', 'coutParticipation','id_Resp','id_Membre','id_Utilisateur','id_Adresse');

	public static function getAssembleesPubliques() {
    	return DB::select('SELECT * 
                            FROM Assemblee A, Adresse AD 
                            WHERE A.id_Adresse = AD.id_Adresse 
                            AND A.assembleePrivee = 0 
                            ORDER BY A.dateAsmb');
    }
}