<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    public $timestamps = 'false';
    protected $table = 'Responsable';
    protected $primaryKey = 'idResp';
    protected $fillable = array('titreResp', 'idMembre', 'idUtilisateur');


}

