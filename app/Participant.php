<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Participant extends Model
{
    //
    public $timestamps = 'false';
    protected $table = 'Participant';
    protected $filliable = array('id_Membre','id_Asmb');
    protected $primaryKey= 'id_Participant';

    public static function getParticipation($idMembre, $idAsmb) {
    	return DB::select('SELECT * FROM Participant WHERE id_Membre = '.$idMembre.' AND id_Asmb = '.$idAsmb);
    }

    public static function ajouter($idMembre, $idAsmb) {
    	DB::insert("INSERT INTO Participant(id_Membre, id_Asmb) VALUES(".$idMembre.", ".$idAsmb.")");
    }

    public static function supprimer($idMembre, $idAsmb) {
    	DB::table('Participant')->where('id_Membre', '=', $idMembre)->where('id_Asmb', '=', $idAsmb)->delete();
    }
}
