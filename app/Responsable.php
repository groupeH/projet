<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Responsable extends Membre
{
    public $timestamps = 'false';
    protected $table = 'Responsable';
    protected $primaryKey ='id_Resp';
    protected $fillable =array('titreResp','id_Membre','id_Utilisateur');

    //Retourne toutes les informations concernant tous les responsables
	public static function allResponsable() {
		
		$responsable=DB::table('Responsable')->select('*') ->join('utilisateur', 'responsable.id_Utilisateur', '=', 'utilisateur.id_Utilisateur')->get();
	    return $responsable;
	}

    //Retourne toutes les informations concernant un responsable
	public static function findResp($id) {
		
		$responsable=DB::table('Responsable')->select('*')->where('id_Utilisateur',$id)->get()->first();
	    return $responsable;
	}
}

