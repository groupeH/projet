<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Responsable extends Membre
{
    public $timestamps = 'false';
    protected $table = 'Responsable';
    protected $primaryKey = array('id_Resp','id_Membre','id_Utilisateur');
    protected $fillable ='titreResp';

	public static function allResponsable() {
		
		$responsable=DB::table('Responsable')->select('*') ->join('utilisateur', 'responsable.id_Utilisateur', '=', 'utilisateur.id_Utilisateur')->get();
	    return $responsable;
	}
}

