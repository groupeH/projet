<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Utilisateur
{
    //
    public $timestamps = 'false';
    protected $table = 'Membre';
    protected $primaryKey = array('id_Membre','id_Utilisateur');
 
}
