<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    public $timestamps = 'false';
    protected $table = 'Responsable';
    protected $primaryKey = 'id_Resp';
    protected $fillable = array('titreResp', 'idMembre', 'id_Utilisateur');


}

