<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    public $timestamps = 'false';
    protected $table = 'Responsable';
    protected $primaryKey = array('id_Resp','id_Membre','id_Utilisateur');
    protected $fillable ='titreResp';


}

