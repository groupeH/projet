<?php

/**
 * Created by PhpStorm.
 * User: Julie
 * Date: 31/01/2017
 * Time: 16:23
 */

//Ceci est le modèle

namespace App;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model{

	public $timestamps = 'false';
    protected $primaryKey = 'id_Utilisateur';
    protected $table = 'Utilisateur';
    protected $filliable= array('login','mdp','nomUt','mailUt','portable','civilite','photo','moyenCom','ddn','id_Adresse','id_Assos');



}
